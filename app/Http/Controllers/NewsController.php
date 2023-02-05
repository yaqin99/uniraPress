<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function detailBerita($id){
        $data = Berita::find($id);
        $fixedData =  $data->views ;
        DB::table('beritas')->where('id' , $id)->update(['views' => $fixedData + 1 ]);

        return view('pages.detailBerita' , [
            'news' =>$data->with('kategoriBerita')->where('id' , $id)->get(),
            
            'kategoriBerita' => KategoriBerita::all(),
        ]);
    }
    public function news(){
       $data =  Berita::with('kategoriBerita')->orderBy('id' , 'desc')->latest()->limit(4)->get();
       $kimi =  Berita::with('kategoriBerita')->orderBy('views' , 'desc')->limit(5)->get();
       $sliced = $data->shift();
        return view('pages.news' , [
            'news' => Berita::with('kategoriBerita')->orderBy('id' , 'desc')->SearchNews()->paginate(2)->withQueryString(),
            'singleNews' => Berita::with('kategoriBerita')->orderBy('id' , 'desc')->latest()->limit(1)->get(),
            'latestNews' => $data,
            'topViews' => $kimi , 
            'kategoriBerita' => KategoriBerita::all(),
        ]);
    }

    public function editBerita($id){
        $data = Berita::find($id);
        return view('admin.adminComponent.updateBerita' , [
            'news' => $data->with('kategoriBerita')->where('id' , $id)->get(),
            
            'kategoriBerita' => KategoriBerita::all(),
        ]);
    }

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
            'views' => 0 , 

        ]);

        if($query){
            return back()->with('success' , 'Data Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');

        }
    }

    
    public function deleteBerita($id){
        $data = Berita::find($id);
       $delete =  $data->delete();

       if($delete){
        return back()->with('berhasilHapus' , 'Data Berhasil di Hapus');
    } else {
        return back()->with('gagalHapus' , 'Data Gagal di Hapus');

    }
    }

    public function editNews( $id){
        
        $validatedData =  request()->validate([
            'judul_berita' => 'required' , 
            'isi_berita' => 'required' , 
            

        ]);
        $data = Berita::find($id);
        if (request()->kategori != $data->kategori_berita_id) {
            $validatedData['kategori_berita_id'] = request()->kategori ;
        }
        if (request()->kategori === null) {
            $validatedData['kategori_berita_id'] = $data->kategori_berita_id ;
        }

        $cek = DB::table('beritas')->where('id' , $id)->update($validatedData);
        if ($cek) {
            # code...
            return redirect('/admin/dataBerita')->with('success' , 'Data Berhasil di Update');
        } 

        return dd('gagal');


    }
}
