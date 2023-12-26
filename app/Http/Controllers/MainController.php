<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;


// dengan index adalah nama methodnya => public function index()
class MainController extends Controller
{
    public function home()
    {
        return view('main/home', [
            "title" => "home",
            "image" => "anak.jpg"
    ]);
    }


    public function profil()
    {
    return view('main/Profil', [
        "title" => "profil",  
        "nama" => "anak anak",
        "email" => "anakputussekolah@gmail.com",
        "image" => "anak.jpg"
    ]);
    }
    

    public function contact()
    {
        return view('main/contact', ["title" => "contact"
    ]);
    }

}
   
