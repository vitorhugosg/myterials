<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('type_product_id');
            $table->integer('company_id');
            $table->integer('collection_id');
            $table->integer('bought_uofm_id');
            $table->integer('sold_uofm_id');
            $table->integer('profile_id'); 
            $table->integer('grade_id');
            $table->integer('moisture_id');
            $table->integer('material_type_id');
            $table->integer('hazard_id');
            $table->integer('volume_type_id');
            $table->integer('finish_id');
            $table->double('net_weight')->nullable();
            $table->double('gross_weight')->nullable();
            $table->double('width')->nullable();
            $table->double('length')->nullable();
            $table->double('heigth')->nullable();
            $table->double('volume')->nullable();
            $table->char('hs_code', 190)->nullable();
            $table->char('upc_code', 190)->nullable();
            $table->char('supplier_sku', 190)->nullable();
            $table->char('own_sku', 190)->nullable();
            $table->text('barcode')->nullable();
            $table->text('qrcode')->nullable();
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn('type_product_id');
            $table->dropColumn('company_id');
            $table->dropColumn('collection_id');
            $table->dropColumn('bought_uofm_id');
            $table->dropColumn('sold_uofm_id');
            $table->dropColumn('profile_id');
            $table->dropColumn('grade_id');
            $table->dropColumn('moisture_id');
            $table->dropColumn('net_weight');
            $table->dropColumn('gross_weight');
            $table->dropColumn('finish_id');
            $table->dropColumn('hs_code');
            $table->dropColumn('upc_code');
            $table->dropColumn('supplier_sku');
            $table->dropColumn('own_sku');
            $table->dropColumn('width');
            $table->dropColumn('length');
            $table->dropColumn('heigth');
            $table->dropColumn('volume');
            $table->dropColumn('material_type');
            $table->dropColumn('hazard_id');
            $table->dropColumn('barcode');
            $table->dropColumn('qrcode');
            $table->dropColumn('status');
            $table->dropColumn('volume_type_id');
            $table->dropColumn('material_type_id');
        });
    }
}
