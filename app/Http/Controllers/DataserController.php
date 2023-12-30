<?php

namespace App\Http\Controllers;

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



    public function destroy($id)
    {
        UserModel::findOrFail($id)->delete();

        return redirect()->route('user.index');
    }
}