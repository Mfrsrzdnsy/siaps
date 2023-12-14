<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSiswa extends Controller
{
    public function index() 
    {
        return view('siswa.index ');
    }
}