<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class GuestProductsController extends Controller
{
    public function index(){

    	$products   = Product::inRandomOrder()->take(8)->get();
        $categories = Category::all();

    	return view('guest.pages.products.index', compact('products', 'categories')); 
    }

    public function show($id){

    	$product = Product::findOrFail($id);

        return view('guest.pages.products.show', compact('product'));
    }
}
