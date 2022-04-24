<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class PenggunaController extends Controller
{
    // Tampil Pengguna - Back
    public function hero(){
        return view('back.hero',[
            "title"=>"Hero",
            "d" => Hero::first()
        ]);
    }
}
