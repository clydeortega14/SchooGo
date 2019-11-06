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
        $categories = Category::all();

    	return view('admin.pages.categories.index')
            ->with('categories', $categories)
            ->with('category', $category);
    }
    public function update(Request $request, $id)
    {
    	Category::where('id', $id)->update([

    		'name' => $request->name,
    		'description' => $request->description,
    		'status' => 1
    	]);

    	return redirect()->route('categories.index')->with('success', 'Successfully updated');
    }

    public function getCategoryDept($id)
    {
        $departments = Department::where('category_id', $id)->where('status', true)->get();

        return response()->json(['departments' => $departments]);
    }

    public function statusUpdate($id){
        $category = Category::findOrFail($id);

        if($category->status == true){

            $category->update(['status' => false]);
        }else{

            $category->update(['status' => true]);
        }

        return redirect()->route('categories.index');
    }
}
