<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Admin extends Model {
    use HasApiTokens, HasFactory, Notifiable;

    use HasFactory;

    protected $guarded = ['id'];

    public function berita(){
        return $this->hasMany(Berita::class);
    }
}
