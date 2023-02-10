<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Berita;
use App\Models\PengajuanBuku;
use Illuminate\Support\Facades\DB;
class BukuController extends Controller
{
    
    public function index (){
        // $data = Buku::with('kategoriBuku')->SearchBook()->paginate(8)->withQueryString();
        
        // $dt = Carbon::parse($post->tanggal)->format('l\\, d F Y');
        // $dt = Carbon::parse($data->tanggal)->isoFormat('dddd, D MMMM Y');

       
        return view('home' , [
            'title' => 'home' , 
            'books' => Buku::with('kategoriBuku')->SearchBook()->paginate(8)->withQueryString(),
            'news' => Berita::with('kategoriBerita')->SearchNews()->paginate(4)->withQueryString(),
            'pengajuan' => PengajuanBuku::all(),


        ]);
    }
    public function detailBuku($id){
        $data = Buku::find($id);
    //    $delete =  $data->delete();
    return view('pages.detailBuku' , [
        'title' => 'home' , 
        'books' => $data->with('kategoriBuku')->where('id' , $id)->get(),
        'many' => $data->latest()->paginate(3) ,
       

    ]);
    
    }

    public function addBook(Request $request){


       $validatedData =  $request->validate([
            'namaBuku' => 'required' , 
            'penerbit' => 'required' , 
            'kategori' => 'required' , 
            'deskripsi' => 'required' , 
            'image' => 'image|file|max:5024|mimes:jpg,jpeg,png',
            'dokumen' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
        ]);

        if ($request->file('image')) {
           $request->file('image')->store('post-image');
           $validatedData['image'] = $request->file('image')->store('post-images');
        }
        if ($request->file('dokumen')) {
           $request->file('dokumen')->store('file-buku');
           $validatedData['dokumen'] = $request->file('dokumen')->store('file-buku');
        }

        $query = DB::table('bukus')->insert([
            'nama_buku' =>$request->input('namaBuku'), 
            'penerbit'  =>$request->input('penerbit'),
            'kategori_buku_id' =>$request->input('kategori'),
            'deskripsi' =>$request->input('deskripsi'),
            'tanggal' => Carbon::now(),
            'image' => $validatedData['image'],
            'dokumen' =>$validatedData['dokumen'],
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
