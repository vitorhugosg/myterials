<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AltersTableProductsThree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('net_weight');
            $table->dropColumn('gross_weight');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->double('net_weight',12,2)->nullable();
            $table->double('gross_weight',12,2)->nullable();
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
            $table->dropColumn('net_weight');
            $table->dropColumn('gross_weight');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->double('net_weight');
            $table->double('gross_weight');
        });
    }
}
