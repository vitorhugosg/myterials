<?php

namespace App\Http\Controllers\Products\Uofm;

use App\Models\Uofm_Type;
use App\Models\Uofm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UofmController extends Controller
{
    public function get(Request $request){

        $uofm = Uofm::get();
        
        foreach ($uofm as $key => $value) {
            $uofm[$key]['type'] = Uofm_type::where('id', $uofm[$key]['uofm_type_id'])->first();
        }
        return [
            'status' => true,
            'uofm' => $uofm 
        ];
    }
}
