<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Product;

class TestController extends Controller
{
    public function getIndex() {
//		echo "ok";
	$cat=DB::table('products');
	$test1=$cat->get();
//	echo "<pre>";
//	print_r($test1);
//	echo "</pre>";

	dd($test1);
	
	
	$test2=$cat->where('showhide','show')->get();

	
	


	}
	
		public function getSave(){
			$one= new Product;
			$one->name='имя';
			$one->picture='/image/';
			$one->save();
		}
	

	
//		public function getCreate($id=null){
//			product::insert([
//				'name'=>$id;
//				'picture'=>'/image';
//			]);

	

		public function getAll() {
			$all=Product::all();
			dd($all);
		}
		
	
		
}
