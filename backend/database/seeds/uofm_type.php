<?php

use Illuminate\Database\Seeder;

class uofm_type extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
    		[
    			'name' => 'Unity',
    		],
    		[
    			'name' => 'Linear'
    		],
    		[
    			'name' => 'Area'
    		],
    		[
    			'name' => 'Volume'
    		],
    		[
    			'name' => 'Weight'
    		]
    	];
        DB::table('uofm_type')->insert($data);
    }
}
