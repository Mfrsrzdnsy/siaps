<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function SiswaData()
    {
        $siswas = SiswaModel::all();
        return view('siswa.index', compact('siswas'));
    }

    public function Tambah()
    {
        return view('siswa.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|string|max:20',
            'nama' => 'required|string|max:50',
            'jenis_kelamin' => 'required|string',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        SiswaModel::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}