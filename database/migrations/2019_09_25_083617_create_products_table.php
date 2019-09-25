<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->text('product_description')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('department_id');
            $table->float('price');
            $table->string('image')->nullable();
            $table->mediumInteger('quantity');
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('department_id')->references('id')->on('departments')
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
        Schema::dropIfExists('products');
    }
}
