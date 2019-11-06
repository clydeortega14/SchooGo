<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Department;

class DepartmentsController extends Controller
{

  public function __construct()
  {
    $this->categories = Category::where('status', true)->get();
    $this->departments = Department::all();
    $this->department = new Department;
  }

	public function index()
	{
		return view('admin.pages.departments.index')->with('departments', $this->departments)
    ->with('categories', $this->categories);
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
   		Department::create($this->department->departmentData($request->toArray()));
   		//redirect
   		return redirect()->route('departments')->with('success', 'new department successfully added');

   	}
   	public function edit($id)
   	{
   		$department = Department::findOrFail($id);

   		return view('admin.pages.departments.index')->with('department', $department)
      ->with('categories', $this->categories)
      ->with('departments', $this->departments);
   	}

   	public function update(Request $request, $id)
   	{
   		//validate 
   		$this->validation($request);
      $deparment = new Department;
   		//UPDATE Department
   		Department::where('id', $id)->update($this->department->departmentData($request->toArray()));
   		return redirect()->route('departments')->with('success', 'Department updated');
   	}

    public function departmentStatusUpdate($id)
    {
        $dept = $this->department->where('id', $id)->first();
        if($dept->status == true){
          $dept->update(['status' => false]);
        }else{
          $dept->update(['status' => true]);
        }
        return redirect()->route('departments');
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
