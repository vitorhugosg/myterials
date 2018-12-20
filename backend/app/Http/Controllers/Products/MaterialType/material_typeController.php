<?php

namespace App\Http\Controllers\Products\MaterialType;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Material_Type;
use App\Http\Controllers\Products\Collection\collectionController;
use App\User;
use App\Models\Collection;
use App\Models\Company;
use Auth;

class material_typeController extends Controller
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
                'material_type' =>[
                    'active' => Material_Type::where('status', 1)->whereIn('collection_id', $idCollections)->get(),
                    'desactive' => Material_Type::where('status', 0)->whereIn('collection_id', $idCollections)->get()
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

        if(Material_Type::where('name', $data['name'])->where('collection_id', $data['idCollection'])->count() > 0){
            return [
                'status' => false,
                'message' => 'Name exisits in table'
            ];
        }
        
        if ($collection = Collection::find($data['idCollection'])) {

            $insert = [
                'collection_id' => $data['idCollection'],
                'name' => $data['name'],
                'status' => 1
            ];
            if ($add = Material_Type::create($insert)) {
                return $this->get($request, $collection['company_id']);
            }else{
                return [
                    'status' => false,
                    'message' => 'Error inserting Material Type into system '
                ];
            }
        }else{
            return [
                'status' => false,
                'massage' => 'You are not part of this Collection'
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
            if ($updateResult = Material_Type::find($data['id'])) {
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
    public function activate(Request $request){
        $data = $request->all();
        $user = $request->user();
        //primeiro verificar se item pertence a uma collection que pertence a sua company
        if ($this->get($request,$data['idCompany'])['status'] === true) {
            if ($updateResult = Material_Type::find($data['id'])) {
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
