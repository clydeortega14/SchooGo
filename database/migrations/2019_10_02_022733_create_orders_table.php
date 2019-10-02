<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipper')->nullable();
            $table->string('order_number');
            $table->text('description')->nullable();
            $table->float('total_price', 8, 2);
            $table->string('address');
            $table->date('arrival_date')->nullable();
            $table->string('contact_person');
            $table->string('contact_number');
            $table->unsignedSmallInteger('status');
            $table->timestamps();


            //foreign keys
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('shipper')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('status')->references('id')->on('order_statuses')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
