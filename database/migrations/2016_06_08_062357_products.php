<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() //сщздание табл
    {
        Schema::create('products', function(Blueprint $t){
			$t->increments('id');
			$t->integer('cat_id');
			$t->string('name');
			$t->text('discription');
			$t->string('price');
			$t->string('picture');
			$t->enum('showhide', array('show','hide'))->defult('show');
			$t->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
