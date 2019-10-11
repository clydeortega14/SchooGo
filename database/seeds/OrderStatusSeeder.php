<?php

use Illuminate\Database\Seeder;
use App\OrderStatus;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderStatus::create(['status' => 'pending', 'class' => 'badge badge-warning']);
        OrderStatus::create(['status' => 'waiting', 'class' => 'badge badge-primary']);
        OrderStatus::create(['status' => 'on shipping', 'class' => 'badge badge-info']);
        OrderStatus::create(['status' => 'delivered', 'class' => 'badge badge-success']);
        OrderStatus::create(['status' => 'cancelled', 'class' => 'badge badge-danger']);
    }
}
