<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['product_name', 'product_description', 'category_id', 'department_id', 'price', 'image', 'quantity', 'status'];

    public function productData(Array $data)
    {
        return [

            'product_name' => $data['name'],
            'product_description' => $data['description'],
            'category_id' => $data['category_id'],
            'department_id' => $data['department_id'], 
            'price' => $data['price'],
            'quantity' => $data['quantity'],
        ];
    }

    public function presentPrice()
    {
        return number_format($this->price, 2);
    }

    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function department()
    {
    	return $this->belongsTo('App\Department', 'department_id', 'id');
    }
    public function attributes()
    {
        return $this->hasMany('App\ProductAttribute', 'id');
    }
}
