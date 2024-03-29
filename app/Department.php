<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    protected $fillable = ['category_id', 'name', 'description', 'status'];

    public $timestamps = false;

    public function departmentData(Array $data)
    {
    	return [
    		'category_id' => $data['category'],
   			'name' => $data['name'],
   			'description' => $data['description'],
    	];
    }
    public function category()
    {
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }
}
