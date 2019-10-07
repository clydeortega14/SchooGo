<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    protected $fillable = ['attr_id', 'value'];

    public $timestamps = false;

    public function attributes(){

    	return $this->belongsTo('App\ProductAttribute', 'attr_id', 'id');
    }
}
