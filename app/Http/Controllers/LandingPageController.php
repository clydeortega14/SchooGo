<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;

class LandingPageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function index()
    {
    	$products   = Product::inRandomOrder()->take(8)->get();

    	return view('guest.pages.landing-page', compact('products'));
    }
}
