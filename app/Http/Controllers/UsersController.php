<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id[] = auth()->user()->id;
        $users = User::whereNotIn('id', $id)->get();
        
        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.pages.users.edit-user', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($request->has('edit-user')){

            if($request->has('roles')){

                //DETACH ROLES
                DB::table('role_user')->where('user_id', $user->id)->delete();
                //ADD NEW ROLE TO USER
                foreach($request->roles as $role){

                    DB::table('role_user')->insert([
                        'user_id' => $user->id,
                        'role_id' => $role
                    ]);
                }

                return redirect()->route('users.edit', $user->id)->with('success', 'added role to'.' '.$user->email);
            }
        }

        if($request->has('update-status')){

            if($user->status == true){
                $user->update(['status' => false]);
            }else{
                $user->update(['status' => true]);
            }
            return redirect()->route('users.index')->with('success', 'User status has been upated');
        }
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
