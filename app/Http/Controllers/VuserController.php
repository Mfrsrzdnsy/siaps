<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuserController extends Controller
{
    public function VusernDashboard(){
        
        return view('vuser.index');
    }
}