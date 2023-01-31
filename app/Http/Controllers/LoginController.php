<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller ; 
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ; 

class LoginController extends Controller
{
    //  use AuthenticatesUsers ; 
     protected $guard = 'adminMiddle'; 
     protected $redirectTo = '/login' ; 

     public function __construct()
     {
        $this->middleware('guest')->except('logout');
     }

     public function guard()
     {
        return auth()->guard('adminMiddle');
     }

    public function loginAdmin(){
        return view('admin.loginAdmin');
    }
    public function loginForm(){
        if (auth()->guard('adminMiddle')->user()) {
           return back();
        }
    }

    public function login(Request $req){
         $this->validate($req , [
             'email' => 'required' , 
             'password' => 'required' , 
         ]);
 
         if (auth()->guard('adminMiddle')->attempt(['email' => $req->email , 'password' => $req->password])) {
            
            dd('berhasil');
            //  return redirect()->route('admin.adminDashboard');
         } 
         return back()->with('gagal' , 'Gagal login');
     }
    public function authentication(Request $req){
        //  $credential = $req->validate($req , [
        //      'email' => 'required' , 
        //      'password' => 'required' , 
        //  ]);
 
         if (Auth::attempt(['email' => $req->email , 'password' => $req->password])) {
            $req->session()->regenerate();
            dd('berhasil');
            //  return redirect()->route('admin.adminDashboard');
        } 
        dd('Gagal ');
        //  return back()->with('gagal' , 'Gagal login');
     }
     public function authenticate(Request $request)
     {
         $credentials = $request->validate([
             'email' => 'required',
             'password' => ['required'],
         ]);
         $login = Auth::attempt($credentials ) ; 
         

         if ($login) {
            //  $request->session()->regenerate();
  
             return redirect()->intended('admin');
         } 
         return back()->withErrors([
             'email' => 'The provided credentials do not match our records.',
         ])->onlyInput('email');
     }

     public function logout(){
        Auth::logout();
        //$request dan request() itu sama aja 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/');
     }
}
