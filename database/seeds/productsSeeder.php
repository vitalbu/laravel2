<?php

use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('products')->insert([
			'cat_id'=>'2',
			'name'=>'v2',
			'discription'=>'hh',
			'price'=>'56',
			'picture'=>'/media'
		]);
    }
}
