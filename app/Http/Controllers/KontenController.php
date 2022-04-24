<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\User;
use App\Models\PotensiWisata;

class KontenController extends Controller
{
    // Hero
    public function hero(){
        return view('back.hero',[
            "title"=>"Hero",
            "d" => Hero::first()
        ]);
    }

    public function pengguna(){
        return view('back.pengguna',[
            "title"=>"Pengguna",
            "data" => User::all()
        ]);
    }

    public function dataPotensi(){
        return view('back.data_potensi',[
            "title"=>"Data Potensi Wisata",
            "data" => PotensiWisata::all()
        ]);
    }

    public function wisataOlahraga(){
        return view('back.hero',[
            "title"=>"Wisata Olahraga"
        ]);
    }

    public function petaPariwisata(){
        return view('back.hero',[
            "title"=>"Peta Pariwisata"
        ]);
    }
}
