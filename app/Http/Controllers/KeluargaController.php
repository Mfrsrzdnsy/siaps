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
                'jumlah saudara' => 'required|in:1,2,3,4,5,lainnya',
                'alamat' => 'required|string',
                'pendidikan_terakhir_ayah' => 'required|string|max:255',
                'pendidikan_terakhir_ibu' => 'required|string|max:255',
                'deskripsi' => 'required|string',
            ]);

            KeluargaModel::insert([
                'nama' =>  $request->nama,
                'nama_ayah' =>  $request->nama_ayah,
                'nama_ibu' =>  $request->nama_ibu,
                'jumlah_saudara' => $request->jumlah_saudara,
                'alamat' => $request->alamat,
                'pendidikan_terakhir_ayah' =>  $request->pendidikan_terakhir_ayah,
                'pendidikan_terakhir_ibu' =>  $request->pendidikan_terakhir_ibu,
                'deskripsi' =>  $request->deskripsi,
            ]);

            return redirect()->route('keluarga.index')->with('success', 'Data keluarga berhasil ditambahkan.');
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
        $sid = $request->id;
        KeluargaModel::findOrFail($id)->update([
            'nama' =>  $request->nama,
            'nama_ayah' =>  $request->nama_ayah,
            'nama_ibu' =>  $request->nama_ibu,
            'jumlah_saudara' => $request->jumlah_saudara,
            'alamat' => $request->alamat,
            'pendidikan_terakhir_ayah' =>  $request->pendidikan_terakhir_ayah,
            'pendidikan_terakhir_ibu' =>  $request->pendidikan_terakhir_ibu,
            'deskripsi' =>  $request->deskripsi,

        ]);

        return redirect()->route('keluarga.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        KeluargaModel::findOrFail($id)->delete();

        return redirect()->route('kelarga.index');
    } 
    

    // Metode lainnya dengan penanganan kesalahan serupa...
}
