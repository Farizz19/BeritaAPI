<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranModel;
use Illuminate\Http\Request;

class PelanggaranController extends Controller
{
    public function pelanggaranAPI(){
        $pelanggaran = PelanggaranModel::get();

        return response()->json($pelanggaran, 200);
    }
}
