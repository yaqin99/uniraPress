<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanBuku extends Model
{
    use HasFactory;

    public function scopeSearchPengajuan($query ){
        if (request('search')) {
          $query->where('nama_buku','like','%'.request('search').'%');
          // ->orWhere('nama_kategori','like','%'.request('search').'%');
      } 
      }
}
