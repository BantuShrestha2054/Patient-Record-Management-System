<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";
    protected $fillable=['name','image','description','price','quantity','category_id'];

   	public function category()
   	{
   		return $this->hasOne('App\ProductCategory','id','category_id');
   	}
}
