<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Department;

class CategoriesController extends Controller
{
    
    public function index()
    {
    	$categories = Category::all();

    	return view('admin.pages.categories.index', compact('categories'));
    }
    public function create()
    {
    	return view('admin.pages.categories.create');
    }
    public function store(Request $request)
    {
    	//validation
    	$this->validate($request, [

    		'name' => 'required',
    		'description' => 'required'
    	]);

    	//create
    	Category::create($request->all());

    	return redirect()->route('categories.index')->with('success', 'Successfully added');
    }
    public function edit($id)
    {
    	$category = Category::findOrFail($id);

    	return view('admin.pages.categories.create')->with('category', $category);
    }
    public function update(Request $request, $id)
    {
    	Category::where('id', $id)->update([

    		'name' => $request->name,
    		'description' => $request->description,
    		'status' => $request->category_status
    	]);

    	return redirect()->route('categories.index')->with('success', 'Successfully updated');
    }

    public function getCategoryDept($id)
    {
        $departments = Department::where('category_id', $id)->where('status', true)->get();

        return response()->json(['departments' => $departments]);
    }
}
