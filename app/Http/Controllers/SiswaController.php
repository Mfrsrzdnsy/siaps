<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use Illuminate\Support\Facades\Log;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = SiswaModel::all();
        return view('siswa.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nis' => 'required|string|max:20',
            'nama' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan,lainnya',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'pendidikan_terakhir' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        SiswaModel::insert([
            'nis' => $request->nis,
            'nama' =>  $request->nama,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'tempat_lahir' =>  $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' =>  $request->pendidikan_terakhir,
            'deskripsi' =>  $request->deskripsi,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $data = SiswaModel::findOrFail($id);
        return view('siswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sid = $request->id;
        SiswaModel::findOrFail($id)->update([
            'nis' => $request->nis,
            'nama' =>  $request->nama,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'tempat_lahir' =>  $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' =>  $request->pendidikan_terakhir,
            'deskripsi' =>  $request->deskripsi,

        ]);

        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        SiswaModel::findOrFail($id)->delete();

        return redirect()->route('siswa.index');
    }


    // Metode lainnya dengan penanganan kesalahan serupa...
}
