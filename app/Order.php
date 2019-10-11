<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [

    	'user_id',
    	'shipper',
    	'order_number',
    	'description',
    	'total_price',
    	'address',
    	'arrival_date',
    	'contact_person',
    	'contact_number',
    	'status'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function shipper()
    {
    	return $this->hasOne('App\User', 'shipper', 'id');
    }

    public function statuses()
    {
    	return $this->hasOne('App\OrderStatus', 'id', 'status');
    }
}
