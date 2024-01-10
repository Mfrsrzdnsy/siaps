<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
    if (auth()->User->isAdmin()) {
        // Logika atau tampilan untuk admin
        return view('admin.dashboard');
    } else {
        // Logika atau tampilan untuk user
        return view('user.dashboard');
    }
}

}
