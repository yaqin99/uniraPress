<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Admin extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

  

    protected $guarded = ['id'];

    public function berita(){
        return $this->hasMany(Berita::class);
    }
}
