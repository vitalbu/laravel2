<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
	protected $table='products';
	public static $timestamps=date;
	protected $fillable=array('name','body','picture');
	protected $guarded=array('id');
	protected $hidden=array('showhide');
	
//	product::create(_POST);
}
