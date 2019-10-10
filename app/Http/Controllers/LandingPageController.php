<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class LandingPageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');

    	$this->products = Product::inRandomOrder()->take(8)->get();
    }

    public function index()
    {
    	return view('landing-page.home')->with('products', $this->products);
    }

    public function shop()
    {
    	$categories = Category::all();

    	return view('landing-page.pages.shop.index')

    		->with('categories', $categories)

    		->with('products', $this->products);
    }
}
