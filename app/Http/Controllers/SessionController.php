<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view('login/login');
    }
    function login(Request $request)
    {   
        Session::flash('email',$request->email);
        $request->validate([
        'email'=>'required',
        'password'=>'required',
       ],[
        'email.required'=>'Email wajib diisi',
        'password.required'=>'Password wajib diisi',
       ]);

       $infologin = [
        'email'=>$request->email,
        'password'=>$request->password,
       ];
       if(Auth::attempt($infologin)){
        return redirect('santri')->with('berhasil yaaa','Alhamdulillah beres');
       } else {
        return redirect('login')->withErrors('Username  dan password yang dimasukan tidak valid');
       };
    }

    function logout()
    {
        Auth::logout();
        return redirect('login')->with('succes', 'Berhasil Logout');
    }

    function create()
    {
        return view('register/register');
    }

    function register(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8',
       ],[
        'name.required' => 'Nama wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Email tidak valid',
        'email.unique' => 'Email sudah ada, Ganti lainnya',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Password minimal ada 8 karakter',
       ]);

       $inforegis = [
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
       ];

       User::create($inforegis);

       $infologin = [
        'email'=>$request->email,
        'password'=>$request->password,
       ];

       if (Auth::attempt($infologin)){
        return redirect('login')->with('berhasil yaaa', 'Alhamdulillah beres');
       } else{
        return redirect('register')->withErrors('Username  dan password yang dimasukan tidak valid');
       };
    
    }

}
