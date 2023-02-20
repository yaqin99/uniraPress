<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use App\Models\PengajuanBuku;


class PengajuanController extends Controller
{
    public function addPengajuan(Request $request){


         $request->validate([
             'namaBuku' => 'required' , 
             'namaPengaju' => 'required' , 
             'emailPengaju' => 'required' , 
             'deskripsi' => 'required' , 
         ]);
 
        
         $query = DB::table('pengajuan_bukus')->insert([
             'nama_buku' =>$request->input('namaBuku'), 
            'nama_pengaju' =>$request->input('namaPengaju'),
            'email' =>$request->input('emailPengaju'),
            
            'tanggal' => Carbon::now(),
            'deskripsi' =>$request->input('deskripsi'),
            'status' => 'Menunggu'
         ]);
 
         if($query){
             return back()->with('success' , 'Data Berhasil di Tambahkan');
         } else {
             return back()->with('fail' , 'Data Gagal di Tambahkan');
 
         }
     }

     public function editPengajuan( $id){
        
        $data = PengajuanBuku::find($id);

       

        $data->status = "Disetujui";
        $data->save();
        
        return redirect('/admin/dataPengajuan')->with('success' , 'Data Berhasil di Update');
       



    }
}
