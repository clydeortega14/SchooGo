<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class LandingPageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest');
    }

    public function index()
    {
    	return view('guest.pages.landing-page');
    }
}
