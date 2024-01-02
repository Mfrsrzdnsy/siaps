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


    public function create()
    {
        return view('keluarga.create');
    }

    public function store(Request $request)
    {

           $request->validate([
                'nama' => 'required|string|max:100',
                'nama_ayah' => 'required|string|max:100',
                'nama_ibu' => 'required|string|max:100',
                'jumlah_saudara' => 'required|in:1,2,3,4,5,6,7,8',
                'pendidikan_ayah' => 'required|string|max:255',
                'pendidikan_ibu' => 'required|string|max:255',
                'alamat' => 'required|string',
                'deskripsi' => 'required|string',
            ]);

            KeluargaModel::insert([
                'nama' =>  $request->nama,
                'nama_ayah' =>  $request->nama_ayah,
                'nama_ibu' =>  $request->nama_ibu,
                'jumlah_saudara' => $request->jumlah_saudara,
                'pendidikan_ayah' =>  $request->pendidikan_ayah,
                'pendidikan_ibu' =>  $request->pendidikan_ibu,
                'alamat' => $request->alamat,
                'deskripsi' =>  $request->deskripsi,
            ]);

            return redirect()->route('keluarga.index')->with('success', 'Data Keluarga Berhasil Ditambahkan !!!');
    }

    public function edit(string $id)
    {
        $data = KeluargaModel::findOrFail($id);
        return view ('keluarga.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $kid = $request->id;
        KeluargaModel::findOrFail($id)->update([
            'nama' =>  $request->nama,
            'nama_ayah' =>  $request->nama_ayah,
            'nama_ibu' =>  $request->nama_ibu,
            'jumlah_saudara' => $request->jumlah_saudara,
            'pendidikan_ayah' =>  $request->pendidikan_ayah,
            'pendidikan_ibu' =>  $request->pendidikan_ibu,
            'alamat' => $request->alamat,
            'deskripsi' =>  $request->deskripsi,

        ]);

        return redirect()->route('keluarga.index')->with('success', 'Data Keluarga Berhasil Diupdate !!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        KeluargaModel::findOrFail($id)->delete();

        return redirect()->route('keluarga.index')->with('success', 'Data Keluarga Berhasil Dihapus !!!');
    }


    // Metode lainnya dengan penanganan kesalahan serupa...
}
