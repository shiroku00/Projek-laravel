<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.worker.admin.dashboard');
    }  public function pelanggan()
    {
        return view('admin.worker.admin.pelanggan');
    }
}
