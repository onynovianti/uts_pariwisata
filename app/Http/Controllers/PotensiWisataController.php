<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotensiWisata;
use DB;

class PotensiWisataController extends Controller
{
    // Tambah Data Potensi Wisata - Back
    public function store(Request $request){
        $validatedData=$request->validate([
            'nama' => 'required',
            'deskripsi' => 'required|min:5',
            'kategori' => 'required',
        ]);
        PotensiWisata::create($validatedData);
        $request->session()->flash('success','Data Anda berhasil disimpan');
        return redirect("/datapotensi");
    }

    public function edit($id){
        $potensi = DB::table('potensi_wisatas')->where('id',$id)->first();
        return view('back.data_potensi_edit',[
            'title' => "Edit Potensi",
            'd' => $potensi
        ]);
    }

    public function update(Request $request)
    {
        // update data potensi
        DB::table('potensi_wisatas')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori
        ]);

        // alihkan halaman ke halaman potensi
        return redirect('/datapotensi');
    }

    public function hapus($id){
        $potensi = DB::table('potensi_wisatas')->where('id',$id)->first();
        return view('back.data_potensi_hapus',[
            'title' => "Hapus Potensi",
            'd' => $potensi
        ]);
    }

    public function delete($id)
    {
        // menghapus data potensi berdasarkan id yang dipilih
        DB::table('potensi_wisatas')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman potensi
        return redirect('/datapotensi');
    }
}
