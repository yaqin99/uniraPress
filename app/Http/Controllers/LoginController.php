<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function cek(){
       $nama = Admin::all()->username ; 
       $password = Admin::all()->password;

       if($nama === 'yaqin99' && $password === 'yaqin123'){
            
        return redirect('admin');
       }
    }

    public function loginAdmin(){
        return view('admin.loginAdmin');
    }
    

    public function login(Request $req){
        $data =  $req->validate([
             'username' => 'required' , 
             'password' => 'required' , 
         ]);
 
         if (Auth::guard('admin')->attempt(['username' => $req->username , 'password' => $req->password])) {
            
 
             return redirect('admin');
         }
         return back()->with('gagal' , 'Gagal login');
     }
}
