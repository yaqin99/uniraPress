<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function scopeSearchNews($query ){
        if (request('cari')) {
          $query->where('judul_berita','like','%'.request('cari').'%');
          // ->orWhere('nama_kategori','like','%'.request('search').'%');
      } 
      }

    public function admin(){
        return $this->hasOne(Admin::class);

    }

    public function kategoriBerita(){
        return $this->belongsTo(KategoriBerita::class);
    }
}
