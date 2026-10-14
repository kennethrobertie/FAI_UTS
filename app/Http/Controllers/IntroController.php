<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function daftarMahasiswa(Request $request){
        $nama = "jojo";
        $ruangkelas = [
            [ "nrp"=>"123","nama"=>"jojo","ipk"=>3 ],
            [ "nrp"=>"234","nama"=>"giorno","ipk"=>4 ],
        ];
        return view('aboutme', compact('nama','ruangkelas'));
    }

    public function detail(Request $request){
        echo "Jabatan : $request->jabatan";
        echo "<br>";
        echo "Nama saya : ". ($request->namasaya ?? "Tidak ada nama");
        echo "<br>";
        echo "Umur saya : ". ($request->umur ?? "Tidak ada umur");
    }
    
}
