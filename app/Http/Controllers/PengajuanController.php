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
             'sampul_luar' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'sampul_dalam' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'daftar_isi' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'prakata' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'sinopsis' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
             'isi_buku' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',
            //  'daftar_pustaka' => 'max:30000|mimes:doc,docx,pdf,ppt,pptx',

         ]);
 
         if ($request->file('sampul_luar')) {
            $request->file('sampul_luar')->store('file_pengajuan');
            $validatedData['sampul_luar'] = $request->file('sampul_luar')->store('/public/file-pengajuan');
         }
         if ($request->file('sampul_dalam')) {
            $request->file('sampul_dalam')->store('file_pengajuan');
            $validatedData['sampul_dalam'] = $request->file('sampul_dalam')->store('/public/file-pengajuan');
         }
         if ($request->file('prakata')) {
            $request->file('prakata')->store('file_pengajuan');
            $validatedData['prakata'] = $request->file('prakata')->store('/public/file-pengajuan');
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
         // if ($request->file('daftar_pustaka')) {
         //    $request->file('daftar_pustaka')->store('file_pengajuan');
         //    $validatedData['daftar_pustaka'] = $request->file('daftar_pustaka')->store('/public/file-pengajuan');
         // }
        
        
         $query = DB::table('pengajuan_bukus')->insert([
            'nama_buku' =>$request->input('namaBuku'), 
            'nama_pengaju' =>$request->input('namaPengaju'),
            'email' =>$request->input('emailPengaju'),
            
            'tanggal' => Carbon::now(),
            'sampul_luar' =>$validatedData['sampul_luar'],
            'sampul_dalam' =>$validatedData['sampul_dalam'],
            'prakata' =>$validatedData['prakata'],
            'daftar_isi' =>$validatedData['daftar_isi'],
            'sinopsis' =>$validatedData['sinopsis'],
            'isi_buku' =>$validatedData['isi_buku'],
            // 'daftar_pustaka' =>$validatedData['daftar_pustaka'],
            'deskripsi' =>$request->input('deskripsi'),
            'status' => 'Pengajuan'
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
     public function editPengajuanProses( $id){
        
        $data = PengajuanBuku::find($id);

       

        $data->status = "Proses";
        $data->save();
        
        return redirect('/admin/dataPengajuan')->with('success' , 'Data Berhasil di Update');
       



    }
     public function editSuratPermohonan( $id){
        
        $data = PengajuanBuku::find($id);

        $validatedData = request()->validate([
         'surat_permohonan' => 'required',
        ]);

        if (request()->file('surat_permohonan')) {
         request()->file('surat_permohonan')->store('file_pengajuan');
         $validatedData['surat_permohonan'] = request()->file('surat_permohonan')->store('/public/file-pengajuan');
      }

        $data->surat_permohonan = $validatedData['surat_permohonan'];
        $data->save();
        
        return redirect('/admin/dataPengajuan')->with('success' , 'Data Berhasil di Update');
       



    }
     public function editPermohonan( $id){
        
        $data = PengajuanBuku::find($id);

       

        $data->status = "Proses";
        $data->save();
        
        return redirect('/admin/dataPengajuan')->with('success' , 'Data Berhasil di Update');
       



    }
    public function addPermohonan($id){
      $data = PengajuanBuku::find($id);
      return view('admin.adminComponent.addPermohonan', [
            'peng' => $data,
      ]);
  }


}
