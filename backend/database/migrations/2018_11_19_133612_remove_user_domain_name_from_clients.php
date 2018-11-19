<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveUserDomainNameFromClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('uofm');
        Schema::create('uofm',function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uofm_type_id');
            $table->text('name');
            $table->integer('base_factor');
            $table->double('base_multiply');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('uofm', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('uofm_type_id');
            $table->dropColumn('name');
            $table->dropColumn('base_factor');
            $table->dropColumn('base_multiply');
        });
        Schema::dropIfExists('uofm');
    }
}
