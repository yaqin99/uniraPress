<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriBeritaController extends Controller
{
    public function addKategoriBerita(Request $req){
        $req->validate([
            'namaKategoriBerita' => 'required'
        ]);

        $query = DB::table('kategori_beritas')->insert([
            'nama_kategori' =>$req->input('namaKategoriBerita'), 
            
        ]);

        if($query){
            return redirect('admin/adminComponent/dataBerita')->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');

        }
    }
}
