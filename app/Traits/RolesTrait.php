<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait RolesTrait
{
	protected function validation(Request $request){

         return $this->validate($request, [
            'name' => 'required',
            'display_name' => 'required'
        ]);
    }
    public function rolePermission(Request $request, $role)
    {
    	$role->permissions()->detach();
        foreach ($request->permissions as $permission) {
            $role->permissions()->attach($permission);
        }
    }
}