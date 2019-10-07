<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    protected $table = 'product_attributes';
    protected $fillable = ['product_id', 'attribute'];

  	public $timestamps = false;

  	public function product()
  	{
  		return $this->belongsTo('App\Product', 'product_id', 'id');
  	}

  	public function values()
  	{
  		return $this->hasMany('App\AttributeValue', 'id');
  	}
}
