<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function berita(){
        $berita = BeritaModel::get();

        print_r($berita);

        // foreach($berita as $b){
        //     echo $b->penulis . "<br>";
        //     echo $b->tanggal_berita . "<br>";
        //     echo $b->isi_berita . "<br>";
        //     echo "<hr>";
        // }
    }

    public function beritaAPI(){
        $berita = BeritaModel::get();

        return response()->json($berita, 200);
    }
}
