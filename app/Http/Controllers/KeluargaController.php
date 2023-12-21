<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index()
    {
        $keluargas = KeluargaModel::all();
        return view('keluarga.index', compact('keluargas'));
    }
}
