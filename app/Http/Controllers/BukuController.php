<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    
    public function index (){
        return view('home' , [
            'title' => 'home' , 
            'books' => Buku::all(),
        ]);

       
    }
}
