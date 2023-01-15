<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Berita;
use App\Models\KategoriBuku;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class AdminController extends Controller
{
    //

    public function homeAdmin(){
        return view('admin.adminComponent.dataBuku', [
            'books' => Buku::all() , 
            'kategori' => KategoriBuku::all(),
        ]);
    }

    public function dataBerita(){
        return view('admin.adminComponent.dataBerita', [
            'news' => Berita::all() , 
            'kategoriBerita' => KategoriBerita::all(),
        ]);
    }

   
   
    public function adminSignUp(){
        return view('admin.register');
    }
    public function addKategori(Request $req){

        $req->validate([
            'namaKategori' => 'required'
        ]);

        $query = DB::table('kategori_bukus')->insert([
            'nama_kategori' => $req->input('namaKategori'),
        ]);

        if($query){
            return back()->with('success' , 'Data Berhasil di Tambahkan');
        }else {
            return back('fail' , 'Data Gagal di Tambahkan');

        }
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
