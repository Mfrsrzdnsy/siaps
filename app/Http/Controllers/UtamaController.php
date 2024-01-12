<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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


    public function contact()
    {
        return view('utama/contact', ["title" => "contact"
    ]);
    }

    public function visimisi()
    {
        return view('utama/visimisi', ["title" => "visimisi"
    ]);
    }

}

