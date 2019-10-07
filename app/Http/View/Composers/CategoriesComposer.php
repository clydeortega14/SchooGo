<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Category;

class CategoriesComposer
{
	
	public function compose(View $view){

		$view->with('categories', Category::where('status', true)->get());
	}
}