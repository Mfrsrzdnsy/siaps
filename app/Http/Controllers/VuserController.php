<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuserController extends Controller
{
    public function UserDashboard()
    {
        return view('vuser.user_dashboard');
    }
}
