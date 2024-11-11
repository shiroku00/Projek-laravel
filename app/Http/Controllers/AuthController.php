<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }
    
        return redirect()->back()->with('error', 'Login gagal! Periksa email dan password Anda.');
    }
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }    
      public function logout(Request $request)
    {  
        Auth::logout(); 


        return redirect()->route('login')->with('success', 'Anda telah logout.');
    }
    
}
