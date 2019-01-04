<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Auxiliares
use App\Http\Controllers\Products\Collection\collectionController;
use App\Http\Controllers\Products\Category\categoryController;
use App\Http\Controllers\Products\FinishProduct\finish_productController;
use App\Http\Controllers\Products\GradeProduct\grade_productController;
use App\Http\Controllers\Products\HazardProduct\hazard_productController;
use App\Http\Controllers\Products\MaterialType\material_typeController;
use App\Http\Controllers\Products\MoistureProduct\moistureProductController;
use App\Http\Controllers\Products\ProfileProduct\profile_productController;
use App\Http\Controllers\Products\VolumeType\volume_typeController;
use Melihovv\Base64ImageDecoder\Base64ImageDecoder;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

//MODELS
use App\Models\Product;
use App\Models\Uofm;
use App\Models\Collection;
use App\Models\Volume_Type;
use App\Models\Uofm_Type;
use App\Models\Profile_Product;
use App\Models\Moisture_Product;
use App\Models\Material_Type;
use App\Models\Harzard_Product;
use App\Models\Grade_Product;
use App\Models\Finish_Product;
use App\Models\Category;
use App\Models\Images_Products;



class products extends Controller
{

    public function getProducts(Request $request, $idCompany){
        $products = Product::where('company_id', $idCompany)->get();
        foreach ($products as $key => $value) {
            if(!empty($products['finish_id'])){
                $products[$key]['finish'] = Finish_Product::where('id', $products[$key]['finish_id'])->first()['name'];
            }

            if(!empty($products['grade_id'])){
                $products[$key]['grade'] = Finish_Product::where('id', $products[$key]['grade_id'])->first()['name'];
            }
            if(!empty($products['hazard_id'])){
                $products[$key]['hazard'] = Finish_Product::where('id', $products[$key]['hazard_id'])->first()['name'];
            }
            if(!empty($products['moisture_id'])){
                $products[$key]['moisture'] = Finish_Product::where('id', $products[$key]['moisture_id'])->first()['name'];
            }
            if(!empty($products['material_type_id'])){
                $products[$key]['material_type'] = Finish_Product::where('id', $products[$key]['material_type_id'])->first()['name'];
            }
            if(!empty($products['profile_id'])){
                $products[$key]['profile'] = Finish_Product::where('id', $products[$key]['profile_id'])->first()['name'];
            }
            if(!empty($products['volume_type'])){
                $products[$key]['volume_type'] = Finish_Product::where('id', $products[$key]['volume_type'])->first()['name'];
            }
            $products[$key]['category'] = Category::where('id', $products[$key]['category_id'])->first()['name'];
            $products[$key]['collection'] = Collection::where('id', $products[$key]['collection_id'])->first()['name'];
        }
        return [
            'status'=>true,
            'products' => $products
        ];
    }
    public function getProductsAux(Request $request, $idCompany){
        $user = $request->user();

        if($user->companyes()->find($idCompany)){
            $collection = new collectionController();
            $category = new categoryController();
            $finish_product = new finish_productController();
            $grade_product = new grade_productController();
            $hazard_product = new hazard_productController();
            $material_type = new material_typeController();
            $moistureProduct = new moistureProductController();
            $profile_product = new profile_productController();
            $volume_type = new volume_typeController();
            return[
                'status' => true,
                'collections' => $collection->get($request, $idCompany)['collections'],
                'category' => $category->get($request, $idCompany)['category'],
                'finish_product' => $finish_product->get($request, $idCompany)['finish_product'],
                'grade_product' => $grade_product->get($request, $idCompany)['grade_product'],
                'hazard_product' => $hazard_product->get($request, $idCompany)['hazard_product'],
                'material_type' => $material_type->get($request, $idCompany)['material_type'],
                'moisture_product' => $moistureProduct->get($request, $idCompany)['moisture_product'],
                'profile_product' => $profile_product->get($request, $idCompany)['profile_product'],
                'volume_type' => $volume_type->get($request, $idCompany)['volume_type'],
            ];
        }else{
            return [
                'status' => 'false',
                'massage' => 'You are not part of this company'
            ];
        }
    }

    public function insertProduct(Request $request, $idCompany){

        $images = $request->images;
        $data = $request->all();
        $data['category'] = Category::where('id', $data['form']['category'])->first();
        $data['collection'] = Collection::where('id', $data['form']['collection'])->first();
        //tratando imagens
        $pathImages = $this->renderImages($images, $data, $idCompany);
        $product = new Product();
        //Company collection
        $product['company_id'] = $idCompany;
        $product['collection_id'] = $data['form']['collection'];

        //Auxiliares

        if(!empty($data['form']['finishProduct'])){
            $data['finish'] = Finish_Product::where('id', $data['form']['finishProduct'])->first();
            $product['finish_id'] = $data['form']['finishProduct'];
        }

        if(!empty($data['form']['grade'])){
            $data['grade'] = Grade_Product::where('id', $data['form']['grade'])->first();
            $product['grade_id'] = $data['form']['grade'];
        }

        if(!empty($data['form']['hazardProduct'])){
            $data['hazard'] = Harzard_Product::where('id', $data['form']['hazardProduct'])->first();
            $product['hazard_id'] = $data['form']['hazardProduct'];
        }

        if(!empty($data['form']['moistoreProduct'])){
            $data['moisture'] = Moisture_Product::where('id', $data['form']['moistoreProduct'])->first();
            $product['moisture_id'] = $data['form']['moistoreProduct'];
        }

        if(!empty($data['form']['materialType'])){
            $product['material_type_id'] = $data['form']['materialType'];
            $data['material'] = Material_Type::where('id', $data['form']['materialType'])->first();
        }

        if(!empty($data['form']['profileProduct'])){
            $product['profile_id'] = $data['form']['profileProduct'];
            $data['profile'] = Profile_Product::where('id', $data['form']['profileProduct'])->first();
        }

        if(!empty($data['form']['volume_type'])){
            $product['volume_type_id'] = $data['form']['volume_type'];
            $data['volume_type'] = Volume_Type::where('id', $data['form']['volume_type'])->first();
        }
        //Tamanho
        $product['width'] = str_replace(',', '.',str_replace('.', '',$data['form']['width']));
        $product['length'] =  str_replace(',', '.',str_replace('.', '',$data['form']['lenght']));
        $product['heigth'] =  str_replace(',', '.',str_replace('.', '',$data['form']['height']));
        $product['volume'] = str_replace(',', '.',str_replace('.', '',$data['form']['volume']));

        //STATUS
        $product['status'] = 1;
        //UOMF
        $product['uofm_width'] = $data['form']['uofmWidth'];
        $product['uofm_height'] = $data['form']['uofmHeight'];
        $product['uofm_lenght'] = $data['form']['uofmLenght'];
        $product['uofm_volume'] = $data['form']['uofmVolume'];
        //SKU
        if($data['form']['skuProduct'] != ''){
            $product['own_sku'] = $data['form']['skuProduct'];
        }else{
            $product['own_sku'] = $this->generateSku($data)['own_sku'];
        }
        //name Product
        $product['name'] = $data['form']['nameProduct'];
        //Compra e venda
        $product['bought_uofm_id'] = $data['form']['uofmBought'];
        $product['sold_uofm_id'] = $data['form']['uofmBought'];
        //data e tempo
        //
        $product['created_at'] = Carbon::now();
        $product['updated_at'] = Carbon::now();
        $data['insert'] = $product;
        $data['images'] = $pathImages;
        // return $data;
        if($product->save()){
            if($this->insertImages($pathImages, $product['id'])){
                return [
                    'product' => $product,
                    'status' => true
                ];
            }else{
                $product->destroy($product['id']);
                return [
                    'status'=> false,
                    'response' => 'Error in insert product'
                ];
            }
        }else{
            return [
                'status'=> false,
                'response' => 'Error in insert product'
            ];
        }
        

    }

    public function generateSku($data){
        $return['own_sku'] = '';
        $return['own_sku_two'] = '';
        $return['own_sku'] = strtoupper(substr($data['collection']['name'],0 ,2));
        $return['own_sku'] .= strtoupper(substr($data['category']['name'],0 ,2));
        $return['own_sku'] .= '.';
        if(!empty($data['form']['finishProduct'])){
            $return['own_sku_two'] = $return['own_sku_two'] . strtoupper(substr($data['finish']['name'],0 ,2));
        }

        if(!empty($data['form']['grade'])){
            $return['own_sku_two'] = $return['own_sku_two'] . '-'.strtoupper(substr($data['grade']['name'],0 ,2));
        }

        if(!empty($data['form']['hazardProduct'])){
            $return['own_sku_two'] = $return['own_sku_two'] .'-'.strtoupper(substr($data['hazard']['name'],0 ,2));
        }

        if(!empty($data['form']['moistoreProduct'])){
            $return['own_sku_two'] = $return['own_sku_two'] .'-'.strtoupper(substr($data['moisture']['name'],0 ,2));
        }

        if(!empty($data['form']['materialType'])){
            $return['own_sku_two'] = $return['own_sku_two'] .'-'.strtoupper(substr($data['material']['name'],0 ,2));
        }

        if(!empty($data['form']['profileProduct'])){
            $return['own_sku_two'] = $return['own_sku_two'] .'-'.strtoupper(substr($data['profile']['name'],0 ,2));
        }

        if(!empty($data['form']['volume_type'])){
            $return['own_sku_two'] = $return['own_sku_two'] .'-'.strtoupper(substr($data['volume_type']['name'],0 ,2));
        }

        $return['own_sku_two'] .= '.'.strtoupper(substr($data['form']['nameProduct'],0 ,2));
        $return['own_sku'] = $return['own_sku'].  $return['own_sku_two'];

        return $return;
    }

    public function renderImages($images, $data, $idCompany){
        foreach ($images as $key => $value) {
            //decodificando imgem
            $images[$key]['path'] = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $images[$key]['path']));
            //pegando extenção da imagem
            $ext = explode('.',$images[$key]['name'])[1];
            //fazendo caminho da imagem
            $path[$key]['path'] = 'images/products/'.$idCompany.'/'.str_slug($data['form']['nameProduct'].rand('0000', '9999'). time(), '-'). '.' . $ext;
            // salvando imagem
            Storage::disk('public')->put($path[$key]['path'] ,$images[$key]['path']);
            //pegando imagem principal
            //
            $path[$key]['primary'] = $images[$key]['default'];
            $path[$key]['status'] = 1;
        }
        return $path;
    }

    public function insertImages($images, $idProduct){
        $return['error'] = 0;
        
        foreach ($images as $key => $value) {
            $image = new Images_Products();
            $image['path'] = $images[$key]['path'];
            $image['status'] = $images[$key]['status'];
            $image['primary'] = $images[$key]['primary'];
            $image['products_id'] = $idProduct;
            if(!$image->save()){
                $return['error']++;
            }
            
        }
        return $return;
    }
}


// nameProduct: "Nome do produto"
// skuProduct: null
// uofmBought: 3
// uofmHeight: 2
// uofmLenght: 3
// uofmSold: 2
// uofmVolume: 10
// uofmWidth: 2