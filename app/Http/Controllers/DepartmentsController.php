<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Department;

class DepartmentsController extends Controller
{

	public function index()
	{
		$departments = Department::all();

		return view('admin.pages.departments.index', compact('departments'));
	}

    public function create()
    {
    	return view('admin.pages.departments.create');
    }
    public function store(Request $request)
   	{
   		//validate
   		$this->validation($request);

   		//store department
   		Department::create([

   			'category_id' => $request->category,
   			'name' => $request->name,
   			'description' => $request->description
   		]);

   		//redirect
   		return redirect()->route('departments')->with('success', 'new department successfully added');

   	}
   	public function edit($id)
   	{
   		$department = Department::findOrFail($id);

   		return view('admin.pages.departments.create', compact('department'));
   	}

   	public function update(Request $request, $id)
   	{
   		//validate 
   		$this->validation($request);

   		//UPDATE Department
   		Department::where('id', $id)->update([

   			'category_id' => $request->category,
   			'name' => $request->name,
   			'description' => $request->description,
   			'status' => $request->status
   		]);


   		return redirect()->route('departments')->with('success', 'Department updated');
   	}

   	protected function validation(Request $request)
   	{
   		return $this->validate($request, [

   			'category' => 'required',
   			'name' => 'required',
   			'description' => 'required'
   		]);
   	}
}
