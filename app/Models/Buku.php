<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeSearchBook($query ){
      if (request('search')) {
        $query->where('nama_buku','like','%'.request('search').'%');
        // ->orWhere('nama_kategori','like','%'.request('search').'%');
    } 
    }

    public function kategoriBuku(){

      return $this->belongsTo(KategoriBuku::class);
     
    }
}
