<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        return view('user.index', compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'username' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'foto' => 'required|string|max:50',
            'alamat' => 'required|string',
            'no_telp' => 'required|string|max:20',
            'role' => 'required|required|in:admin,user,agen',
        ]);

        UserModel::insert([
            'name' => $request->name,
            'username' =>  $request->username,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'foto' => $request->foto,
            'alamat' => $request->alamat,
            'no_telp' =>  $request->no_telp,
            'role' =>  $request->role,
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan.');
    }
    public function edit(string $id)
    {
        $data = UserModel::findOrFail($id);
        return view('user.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $uid = $request->id;
        UserModel::findOrFail($id)->update([
            'name' => $request->name,
            'username' =>  $request->username,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'foto' => $request->foto,
            'alamat' => $request->alamat,
            'no_telp' =>  $request->no_telp,
            'role' =>  $request->role

        ]);
 
        return redirect()->route('user.index');
}

    public function destroy($id)
    {
        UserModel::findOrFail($id)->delete();

        return redirect()->route('user.index');
    }
}