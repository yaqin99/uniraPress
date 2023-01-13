<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function homeAdmin(){
        return view('admin.adminDashboard', [
            'books' => Buku::all()
        ]);
    }

   
    public function loginAdmin(){
        return view('admin.loginAdmin');
    }
    public function adminSignUp(){
        return view('admin.register');
    }
    public function registerAdmin(Request $req){

        $req->validate([
            'nama' => 'required' , 
            'email' => 'required',
            'noHp' => 'required' , 
            'username' => 'required',
            'confirmPassword' => 'required',
        ]);

       
        $query = DB::table('admins')->insert([
            'nama_admin' =>$req->input('nama'), 
            'email' => $req->input('email'),
            'noHp'  =>$req->input('noHp'),
            'username' =>$req->input('username'),
            'password' =>$req->input('confirmPassword'),
        ]);

        if($query){
            return redirect('login')->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');
        }
    }
}
