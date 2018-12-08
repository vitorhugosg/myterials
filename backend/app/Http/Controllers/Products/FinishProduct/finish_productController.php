<?php

namespace App\Http\Controllers\Products\FinishProduct;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Finish_Product;
use App\Models\Collection;
use App\Http\Controllers\Products\Collection\collectionController;
use App\User;
use App\Models\Company;
use Auth;

class finish_productController extends Controller
{
    /**
     * Retorna todos itens ativos e desativos dessa tabela.
     * @param $idCompany (int)
     * @return  objectResponse
    **/
    public function get(Request $request,$idCompany){
        $user = $request->user();
        $collection = new collectionController;
        if ($getCollection = $collection->get($request, $idCompany)) {
            $idCollections = [];
            foreach ($getCollection['collections']['active'] as $key => $value) {
                $idCollections[] = $getCollection['collections']['active'][$key]['id'];
            }
            return [
                'status'=> true,
                'finish_product' =>[
                    'active' => Finish_Product::where('status', 1)->whereIn('collection_id', $idCollections)->get(),
                    'desactive' => Finish_Product::where('status', 0)->whereIn('collection_id', $idCollections)->get()
                ],
            ];
        }else{
            return [
                'status' => 'false',
                'massage' => 'You are not part of this company'
            ];
        }
    }
    /**
     * Retorna todos itens ativos e desativos dessa tabela.
     * @param $request->all()['idCollection']
     * @param $request->all()['name']
     * @return  objectResponse
    **/
    public function add(Request $request){
        $data = $request->all();
        $user = $request->user();

        if(isset(Finish_Product::where('collection_id',$data['idCollection'])->where('name', $data['name'])->get()[0])){
            return[
                'status' => false,
                'message' => 'An item with that name already exists.',
                'result' => Finish_Product::where('collection_id',$data['idCollection'])->where('name', $data['name'])->get()
            ];
        }
        if ($user->companyes()->find($data['idCollection'])) {
            $insert = [
                'collection_id' => $data['idCollection'],
                'name' => $data['name'],
                'status' => 1
            ];
            if ($add = Finish_Product::create($insert)) {
                return $this->get($request, $data['idCompany']);
            }else{
                return [
                    'status' => false,
                    'message' => 'Error inserting Material Type into system '
                ];
            }
        }else{
            return [
                'status' => false,
                'massage' => 'You are not part of this company'
            ];
        }
    }

    public function update(Request $request, $idCollection, $idFinishProduct){
        $data = $request->all();
        $user = $request->user();
       
    }

    /**
     * Retorna todos itens ativos e desativos dessa tabela.
     * @param $request->all()['idCompany'] (int)
     * @param $request->all()['id'] -> (int)
     * @return  objectResponse
    **/
    public function desactive(Request $request){
        $data = $request->all();
        $user = $request->user();
        //primeiro verificar se item pertence a uma collection que pertence a sua company
        if ($this->get($request,$data['idCompany'])['status'] === true) {
            if ($updateResult = Finish_Product::find($data['id'])) {
                $updateResult->status = 0;
                $updateResult->save();
                return $this->get($request,$data['idCompany']);
            }else{
                return [
                    'status' => false,
                    'message' => 'Error updating this item'
                ];
            }
        }else{
            return [
                'status' => false,
                'massage' => 'You are not part of this company'
            ];
        }
    }
    /**
     * Retorna todos itens ativos e desativos dessa tabela.
     * @param $idCompany (int)
     * @param $request->all()['id'] (int)
     * @return  objectResponse
    **/
    public function activate(Request $request, $idCompany){
        $data = $request->all();
        $user = $request->user();
        //primeiro verificar se item pertence a uma collection que pertence a sua company
        if ($this->get($request,$data['idCompany'])['status'] === true) {
            if ($updateResult = Finish_Product::find($data['id'])) {
                $updateResult->status = 1;
                $updateResult->save();
                return $this->get($request,$data['idCompany']);
            }else{
                return [
                    'status' => false,
                    'message' => 'Error updating this item'
                ];
            }
        }else{
            return [
                'status' => false,
                'massage' => 'You are not part of this company'
            ];
        }
    }
}
