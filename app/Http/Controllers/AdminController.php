<?php

namespace App\Http\Controllers;

use App\Models\User; 

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboardd.pages.allAdmin',[ 
            'admin'=> User::all()
        ]);
    }

    public function show()
    {
        return view('dashboardd.pages.profil');
    }
}