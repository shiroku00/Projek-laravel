<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.content.Home');

    }  
    public function Jadwal()
    {
        return view('user.content.Jadwal');

    }public function profil()
    {
        return view('user.content.Profil');
    }
    public function order()
    {
        return view('user.content.Order');
    }
}

