<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function GetDashboard(){
 return view('admin.dashboard');
    }
}
