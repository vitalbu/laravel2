<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('categories', function (Blueprint $t) {
			$t->increments('id');
			$t->string('name');
			$t->integer('parent_id');
			$t->enum('showhide', array('show','hide'))->default('show');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('categories');
    }
}
