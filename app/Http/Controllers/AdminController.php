<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
class AdminController extends Controller
{
    //

    public function homeAdmin(){
        return view('admin.adminDashboard', [
            'books' => Buku::all()
        ]);
    }
    public function loginAdmin(){
        return view('admin.loginAdmin');
    }
}
