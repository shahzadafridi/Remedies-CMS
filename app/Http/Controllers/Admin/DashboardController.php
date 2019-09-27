<?php

namespace App\Http\Controllers\Admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.registered')->with('users',$users);
    }

    public function registeredEdit(Request $request, $id){
        $user = User::findorFail($id);
        return view('admin.registered-edit')->with('user',$user);
    }

    public function registeredUpdate(Request $request, $id){
        $user = User::findorFail($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->user_type = $request->input('userType');
        $user->update();
        return redirect('/role-registered')->with('status','User is updated successfully');
    }

    public function registeredDelete(Request $request, $id){
        $user = User::findorFail($id);
        dd($user);
        $user->delete();
        return redirect('/role-registered')->with('status','User is deleted sucessfully');
    }
    
}
