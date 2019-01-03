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


class products extends Controller
{
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
        foreach ($images as $key => $value) {
            $decoder = new Base64ImageDecoder($images[$key]['path'], $allowedFormats = ['jpeg', 'png', 'gif', 'jpg']);
            $decoder->getFormat(); // 'png', or 'jpeg', or 'gif', or etc.
            echo '<img src="'.$images[$key]['path'].'" alt="">';exit; // base64 decoded raw image bytes.
            // base64 encoded raw image bytes.
        }
    }
}
