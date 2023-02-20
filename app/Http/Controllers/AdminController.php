<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Berita;
use App\Models\KategoriBuku;
use App\Models\KategoriBerita;
use App\Models\PengajuanBuku;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use App\Models\User;

class AdminController extends Controller
{
    //

    public function homeAdmin(){
        return view('admin.adminComponent.dataBuku', [
            'books' => Buku::all() , 
            'kategori' => KategoriBuku::all(),
        ]);
    }
    public function dataPengajuan(){
        return view('admin.adminComponent.dataPengajuan', [
            'pengajuan' => PengajuanBuku::all() , 
        ]);
    }
    public function editBuku($id){
        $data = Buku::find($id);
        return view('admin.adminComponent.updateBuku' , [
            'books' => $data->with('kategoriBuku')->where('id' , $id)->get(),
            
            'kategori' => KategoriBuku::all(),
        ]);
    }
    public function editBook( $id){
        
        $validatedData =  request()->validate([
            'nama_buku' => 'required' , 
            'penerbit' => 'required' , 
            'deskripsi' => 'required' , 
        ]);
        $data = Buku::find($id);
        if (request()->kategori != $data->kategori_buku_id) {
            $validatedData['kategori_buku_id'] = request()->kategori ;
        }
        if (request()->kategori === null) {
            $validatedData['kategori_buku_id'] = $data->kategori_buku_id ;
        }

        $cek = DB::table('bukus')->where('id' , $id)->update($validatedData);
        if ($cek) {
            # code...
            return redirect('/admin')->with('success' , 'Data Berhasil di Update');
        } 

        return redirect('/admin/editBuku/'.$id)->with('nothing' , 'Anda Belum Mengubah Apapun');



    }
    
    public function tambahBuku(){
        return view('admin.adminComponent.tambahBuku', [
            'books' => Buku::all() , 
            'kategori' => KategoriBuku::all(),
        ]);
    }
    public function tambahKategoriBuku(){
        return view('admin.adminComponent.tambahKategoriBuku', [
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
    public function tambahBerita(){
        return view('admin.adminComponent.tambahBerita', [
            'news' => Berita::all() , 
            'kategoriBerita' => KategoriBerita::all(),
        ]);
    }
    public function tambahKategoriBerita(){
        return view('admin.adminComponent.tambahKategoriBerita', [
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
    public function addKategoriBerita(Request $req){

        $req->validate([
            'namaKategoriBerita' => 'required'
        ]);

        $query = DB::table('kategori_beritas')->insert([
            'nama_kategori' => $req->input('namaKategoriBerita'),
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
    public function daftarAdmin(Request $req){

       $validatedData =  $req->validate([
            'name' => 'required' , 
            'email' => 'required',
            'password' => 'required',
             
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $data = User::create($validatedData);
        if($data){
            return redirect('login')->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');
        }
    }
}
