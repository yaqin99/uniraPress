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
             'sampul_depan' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'sampul_belakang' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'kata_pengantar' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'daftar_isi' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'sinopsis' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'isi_buku' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'daftar_pustaka' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',

         ]);
 
         if ($request->file('sampul_depan')) {
            $request->file('sampul_depan')->store('file_pengajuan');
            $validatedData['sampul_depan'] = $request->file('sampul_depan')->store('/public/file-pengajuan');
         }
         if ($request->file('sampul_belakang')) {
            $request->file('sampul_belakang')->store('file_pengajuan');
            $validatedData['sampul_belakang'] = $request->file('sampul_belakang')->store('/public/file-pengajuan');
         }
         if ($request->file('kata_pengantar')) {
            $request->file('kata_pengantar')->store('file_pengajuan');
            $validatedData['kata_pengantar'] = $request->file('kata_pengantar')->store('/public/file-pengajuan');
         }
         if ($request->file('daftar_isi')) {
            $request->file('daftar_isi')->store('file_pengajuan');
            $validatedData['daftar_isi'] = $request->file('daftar_isi')->store('/public/file-pengajuan');
         }
         if ($request->file('sinopsis')) {
            $request->file('sinopsis')->store('file_pengajuan');
            $validatedData['sinopsis'] = $request->file('sinopsis')->store('/public/file-pengajuan');
         }
         if ($request->file('isi_buku')) {
            $request->file('isi_buku')->store('file_pengajuan');
            $validatedData['isi_buku'] = $request->file('isi_buku')->store('/public/file-pengajuan');
         }
         if ($request->file('daftar_pustaka')) {
            $request->file('daftar_pustaka')->store('file_pengajuan');
            $validatedData['daftar_pustaka'] = $request->file('daftar_pustaka')->store('/public/file-pengajuan');
         }
        
        
         $query = DB::table('pengajuan_bukus')->insert([
            'nama_buku' =>$request->input('namaBuku'), 
            'nama_pengaju' =>$request->input('namaPengaju'),
            'email' =>$request->input('emailPengaju'),
            
            'tanggal' => Carbon::now(),
            'sampul_depan' =>$validatedData['sampul_depan'],
            'sampul_belakang' =>$validatedData['sampul_belakang'],
            'kata_pengantar' =>$validatedData['kata_pengantar'],
            'daftar_isi' =>$validatedData['daftar_isi'],
            'sinopsis' =>$validatedData['sinopsis'],
            'isi_buku' =>$validatedData['isi_buku'],
            'daftar_pustaka' =>$validatedData['daftar_pustaka'],
            'deskripsi' =>$request->input('deskripsi'),
            'status' => 'Proses'
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
