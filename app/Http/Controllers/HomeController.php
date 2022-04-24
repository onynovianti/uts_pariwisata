<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\PotensiWisata;
use DB;

class HomeController extends Controller
{
    public function index(){
        return view('front.home',[
            "title" => "Home",
            "hero" => Hero::first()
        ]);
    }

    public function potensiWisata(){
        return view('front.potensi_wisata',[
            "title" => "Potensi Wisata",
            "data1" => DB::table('potensi_wisatas')->where('kategori',1)->get(),
            "data2" => DB::table('potensi_wisatas')->where('kategori',2)->get(),
            "data3" => DB::table('potensi_wisatas')->where('kategori',3)->get(),
            "data5" => DB::table('potensi_wisatas')->where('kategori',5)->get()
        ]);
    }

    public function wisataOlahraga(){
        return view('front.wisata_olahraga',[
            "title" => "Wisata Olahraga"
        ]);
    }

    public function petaPariwisata(){
        return view('front.peta_pariwisata',[
            "title" => "Peta Pariwisata"
        ]);
    }
}
