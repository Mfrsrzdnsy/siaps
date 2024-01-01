<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $totalSiswa = SiswaModel::count();
        $totalUser = UserModel::count();

        return view('admin.index', compact('totalSiswa', 'totalUser'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminLogin(){
        return view('admin.admin_login');
    }

    public function AdminProfile(){
        
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.profile_view', compact('profileData'));
        
    }

    public function AdminProfileStore(Request $request){
        
    }
}