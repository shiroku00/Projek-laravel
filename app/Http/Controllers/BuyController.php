<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
     public function kursi()
    {
        return view('user.buy-ticket.Pemilihan-kursi');
    } 
}
