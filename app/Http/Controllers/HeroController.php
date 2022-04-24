<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class HeroController extends Controller
{
    // Update Konten
    public function update(Request $request){
        $request->validate([
            "judul" => 'required',
            "subjudul" => 'required'
        ]);
        Hero::find(1)->update($request->all());
        $request->session()->flash('success','Data Anda berhasil diupdate');
        return redirect("/hero");
    }
}
