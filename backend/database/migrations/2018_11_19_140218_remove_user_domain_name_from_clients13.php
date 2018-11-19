<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUserDomainNameFromClients13 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('uofm_type');
        Schema::create('uofm_type', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uofm_type');
        Schema::table('uofm_type', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('name');
        });
    }
}
