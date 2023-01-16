<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;
class BukuController extends Controller
{
    
    public function index (){

        // dd(request('search'));

        // $buku = ;

       
        return view('home' , [
            'title' => 'home' , 
            'books' => Buku::with('kategoriBuku')->SearchBook()->paginate(8)->withQueryString(),
            'news' => Berita::with('kategoriBerita')->SearchNews()->paginate(4)->withQueryString(),

        ]);
    }
    public function indexAdmin (){

        // dd(request('search'));

        // $buku = ;

       
        return view('home' , [
            'title' => 'home' , 
            'books' => Buku::with('kategoriBuku')->SearchBook()->get(),

        ]);
    }

    public function addBook(Request $request){


       $validatedData =  $request->validate([
            'namaBuku' => 'required' , 
            'penerbit' => 'required' , 
            'kategori' => 'required' , 
            'image' => 'image|file|max:5024',
        ]);

        if ($request->file('image')) {
           $request->file('image')->store('post-image');
           $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $query = DB::table('bukus')->insert([
            'nama_buku' =>$request->input('namaBuku'), 
            'penerbit'  =>$request->input('penerbit'),
            'kategori_buku_id' =>$request->input('kategori'),
            'tanggal' => Carbon::now(),
            'image' => $validatedData['image'],
        ]);

        if($query){
            return back()->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');

        }
    }

    public function deleteBuku($id){
        $data = Buku::find($id);
       $delete =  $data->delete();

       if($delete){
        return back()->with('berhasilHapus' , 'Data Berhasil di Hapus');
    } else {
        return back()->with('gagalHapus' , 'Data Gagal di Hapus');

    }
    }
}
