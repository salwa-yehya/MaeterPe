<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminDashboard(){

          return view('admin.index');
    }// End Method

    
    public function AdminLogin(){

        return view('admin.admin_login');

    }// End Method

    public function AdminProfile(){

        $id = auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }// End Method
    
    public function AdminProfileStore(Request $request){


    }// End Method


    public function AdminDestroy(Request $request) 
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }// End Method

    

}
