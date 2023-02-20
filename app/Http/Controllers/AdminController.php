<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\AuthManager;

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
        $id = auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
         
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }
             $data->save();

             $notification = array(
                'message' => 'Admin Profile Updated Successfully',
                'alert-type' => 'success'
             );
             return Redirect()->back()->with($notification);
    }// End Method


    public function AdminChangePassword(){

       return view('admin.admin_change_password');

    }// End Method
    
    public function AdminUpdatePassword(Request $request){
       //validation 
       $request->validate([
        'old_password'=> 'required',
        'new_password'=> 'required|confirmed',
       ]);

       //Match The Old Password
       if(!Hash::check($request->old_password , auth::user()->password)){
          return back()->with("error", "Passwords don't match , Try again !" );
       }

       //Update The New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status" , "Password Changed Successfully");
        
    }// End Method

    public function AdminDestroy(Request $request) 
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }// End Method

    

}
