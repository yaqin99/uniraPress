<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function addNews(Request $request){
       $validatedData = $request->validate([
            'judulBerita' => 'required' , 
            'isiBerita' => 'required' , 
            'kategori' => 'required' , 
            'foto' => 'image|file|max:5024',

        ]);
        if ($request->file('foto')) {
            $request->file('foto')->store('fotoBerita');
            $validatedData['foto'] = $request->file('foto')->store('fotoBerita');
         }
 

        $query = DB::table('beritas')->insert([
            'judul_berita' =>$request->input('judulBerita'), 
            'isi_berita'  =>$request->input('isiBerita'),
            'tanggal' => Carbon::now(),
            'admin_id' => 1 , 
            'kategori_berita_id' =>$request->input('kategori'),
            'image' => $validatedData['foto'],

        ]);

        if($query){
            return back()->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');

        }
    }
}
