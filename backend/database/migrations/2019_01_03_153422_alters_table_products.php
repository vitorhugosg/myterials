<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltersTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('type_product_id');
            $table->dropColumn('profile_id');
            $table->dropColumn('grade_id');
            $table->dropColumn('moisture_id');
            $table->dropColumn('material_type_id');
            $table->dropColumn('hazard_id');
            $table->dropColumn('volume_type_id');
            $table->dropColumn('finish_id');
        });
        Schema::table('products', function (Blueprint $table) {
            //READICIONANDO
            $table->integer('type_product_id')->nullable();
            $table->integer('profile_id')->nullable();
            $table->integer('grade_id')->nullable();
            $table->integer('moisture_id')->nullable();
            $table->integer('material_type_id')->nullable();
            $table->integer('hazard_id')->nullable();
            $table->integer('volume_type_id')->nullable();
            $table->integer('finish_id')->nullable();
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
            $table->dropColumn('type_product_id');
            $table->dropColumn('profile_id');
            $table->dropColumn('grade_id');
            $table->dropColumn('moisture_id');
            $table->dropColumn('material_type_id');
            $table->dropColumn('hazard_id');
            $table->dropColumn('volume_type_id');
            $table->dropColumn('finish_id');
        });
        Schema::table('products', function (Blueprint $table) {
            //READICIONANDO
            $table->integer('type_product_id');
            $table->integer('profile_id');
            $table->integer('grade_id');
            $table->integer('moisture_id');
            $table->integer('material_type_id');
            $table->integer('hazard_id');
            $table->integer('volume_type_id');
            $table->integer('finish_id');
        });
    }
}
