<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function index(){
        return view('front.login.login',[
            "title" => "Login"
        ]);
    }

    public function register(){
        return view('front.login.register',[
            "title" => "Register"
        ]);
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            'nama' => 'required',
            'username' => 'required|min:5',
            'password' => 'required|min:5',
            'level' => ''
        ]);
        Login::create($validatedData);
        $request->session()->flash('success','Data Anda berhasil disimpan');
        return redirect("/");
        // dd("Registrasi berhasil");
    }
}
