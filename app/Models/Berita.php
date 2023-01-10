<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function kategoriBerita(){
        return $this->hasOne(KategoriBerita::class);
    }
}
