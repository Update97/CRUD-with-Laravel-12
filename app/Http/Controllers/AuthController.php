<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function proseslogin(Request $request)
    {
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('beranda');
        }
        return redirect()->route('login')->with('error', 'Email atau password salah');
    }

    public function showregister()
    {
        return view('auth.register');
    }
    public function beranda()
    {
        return view('pages.beranda');
    }
    public function register(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'nama' => 'required|string|max:255',
        //     'username' => 'required|unique:users',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // $user = User::create([
        //     'nama' => $request->nama,
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        // return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
