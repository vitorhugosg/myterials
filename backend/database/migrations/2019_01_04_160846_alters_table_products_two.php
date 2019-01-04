<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltersTableProductsTwo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('supplier_sku');
            $table->dropColumn('hs_code');
            $table->dropColumn('upc_code');
            $table->dropColumn('barcode');
            $table->dropColumn('qrcode');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->text('supplier_sku')->nullable();
            $table->text('hs_code')->nullable();
            $table->text('upc_code')->nullable();
            $table->text('barcode')->nullable();
            $table->text('qrcode')->nullable();
            //addd new 
            $table->integer('uofm_width');
            $table->integer('uofm_height');
            $table->integer('uofm_lenght');
            $table->integer('uofm_volume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('supplier_sku');
            $table->dropColumn('hs_code');
            $table->dropColumn('upc_code');
            $table->dropColumn('barcode');
            $table->dropColumn('qrcode');
            //drop new
            $table->dropColumn('uofm_width');
            $table->dropColumn('uofm_height');
            $table->dropColumn('uofm_lenght');
            $table->dropColumn('uofm_volume');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->text('supplier_sku');
            $table->text('hs_code');
            $table->text('upc_code');
            $table->text('barcode');
            $table->text('qrcode');
        });
    }
}
