<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// dengan index adalah nama methodnya => public function index()
class UtamaController extends Controller
{
    public function home()
    {
        return view('utama/home', [
            "title" => "home",
            "image" => "anak.jpg"
    ]);
    }
    public function profil()
    {
    return view('utama/Profil', [
        "title" => "profil",  
        "nama" => "anak anak",
        "email" => "anakputussekolah@gmail.com",
        "image" => "anak.jpg"
    ]);
    }
    
    public function pelaporan()
    {
        return view('utama/Pelaporan', ["title" => "pelaporan"
    ]);
    }

    public function contact()
    {
        return view('utama/contact', ["title" => "contact"
    ]);
    }

    // untuk menampilkan hal diambil dari AuthenticatedSessionController
    public function login_siaps()
    {  
            return view('auth.login');
    }    
}
   
