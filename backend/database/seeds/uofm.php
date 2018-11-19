<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class uofm extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
    		//CORRIDO
    		[
    			'uofm_type_id' => 1,
    			'name' => 'EACH',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		//CORRIDO
    		[
    			'uofm_type_id' => 2,
    			'name' => 'MM',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		[
    			'uofm_type_id' => 2,
    			'name' => 'Foot',
    			'base_factor' => 1,
    			'base_multiply' => 304.8
    		],
    		[
    			'uofm_type_id' => 2,
    			'name' => 'Meters',
    			'base_factor' => 1,
    			'base_multiply' => 1000
    		],
    		[
    			'uofm_type_id' => 2,
    			'name' => 'Inches',
    			'base_factor' => 1,
    			'base_multiply' => 25.4
    		],
    		//Quadrados²
    		[
    			'uofm_type_id' => 3,
    			'name' => 'Meters²',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		[
    			'uofm_type_id' => 3,
    			'name' => 'FT²',
    			'base_factor' => 1,
    			'base_multiply' => 10.7639
    		],
    		[
    			'uofm_type_id' => 3,
    			'name' => 'YD²',
    			'base_factor' => 1,
    			'base_multiply' => 0.836127
    		],
    		[
    			'uofm_type_id' => 3,
    			'name' => 'KM²',
    			'base_factor' => 1,
    			'base_multiply' => 1000000
    		],
    		//VOLUME
    		[
    			'uofm_type_id' => 4,
    			'name' => 'CM³',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		[
    			'uofm_type_id' => 4,
    			'name' => 'IN³',
    			'base_factor' => 1,
    			'base_multiply' => 16.3871
    		],
    		[
    			'uofm_type_id' => 4,
    			'name' => 'FT³',
    			'base_factor' => 1,
    			'base_multiply' => 28316.8
    		],
    		[
    			'uofm_type_id' => 4,
    			'name' => 'GAL',
    			'base_factor' => 1,
    			'base_multiply' => 3785.41
    		],
    		[
    			'uofm_type_id' => 4,
    			'name' => 'ML',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		[
    			'uofm_type_id' => 4,
    			'name' => 'L',
    			'base_factor' => 1,
    			'base_multiply' => 1000
    		],

    		//PESO
    		//
    		[
    			'uofm_type_id' => 5,
    			'name' => 'GG',
    			'base_factor' => 1,
    			'base_multiply' => 1
    		],
    		[
    			'uofm_type_id' => 5,
    			'name' => 'KG',
    			'base_factor' => 1,
    			'base_multiply' => 1000
    		],
    		[
    			'uofm_type_id' => 5,
    			'name' => 'TONS',
    			'base_factor' => 1,
    			'base_multiply' => 1000000
    		],
    		[
    			'uofm_type_id' => 5,
    			'name' => 'OZ',
    			'base_factor' => 1,
    			'base_multiply' => 28.3495
    		],
    		[
    			'uofm_type_id' => 5,
    			'name' => 'LB',
    			'base_factor' => 1,
    			'base_multiply' => 453.592
    		],
    	];

    	
        DB::table('uofm')->insert($data);
    }
}
