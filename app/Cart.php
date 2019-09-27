<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    protected $fillable = ['product_id', 'quantity', 'total'];

    public function presentPrice()
    {
    	return number_format($this->total, 2);
    }

    public function totalPrice()
    {
        return sum($this->total);
    }
    public function products()
    {
    	return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
