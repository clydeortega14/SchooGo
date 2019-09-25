<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [

        	// BOOKS

        	[
        		'product_name' => 'The Book of Enoch',
        		'product_description' => 'The fallen Angels, The Nephilims, and ending',
        		'category_id' => 1,
        		'department_id' => 1,
        		'price' => 158.00,
        		'image' => '',
        		'quantity' => 3
        	],

        	[
        		'product_name' => 'The NoteBook',
        		'product_description' => 'The Love story of jack and jaw',
        		'category_id' => 1,
        		'department_id' => 1,
        		'price' => 230.00,
        		'image' => '',
        		'quantity' => 3
        	],

        	[
        		'product_name' => 'Hercules',
        		'product_description' => 'The Love story of hercules',
        		'category_id' => 1,
        		'department_id' => 2,
        		'price' => 500.00,
        		'image' => '',
        		'quantity' => 3
        	],

        	[
        		'product_name' => 'My Unicorn',
        		'product_description' => 'The story of unicorn',
        		'category_id' => 1,
        		'department_id' => 3,
        		'price' => 399.00,
        		'image' => '',
        		'quantity' => 3
        	],



        	//School Supplies
        	[
        		'product_name' => 'notebooks',
        		'product_description' => 'the notebooks',
        		'category_id' => 2,
        		'department_id' => 3,
        		'price' => 10.00,
        		'image' => '',
        		'quantity' => 3
        	],

        	[
        		'product_name' => 'Papers',
        		'product_description' => 'The papers',
        		'category_id' => 2,
        		'department_id' => 1,
        		'price' => 20.00,
        		'image' => '',
        		'quantity' => 3
        	]

        ];


        foreach($products as $product){

        	Product::create([

        		'product_name' => $product['product_name'],
        		'product_description' => $product['product_description'],
        		'category_id' => $product['category_id'],
        		'department_id' => $product['department_id'],
        		'price' => $product['price'],
        		'image' => $product['image'],
        		'quantity' => $product['quantity']

        	]);

        }
    }
}
