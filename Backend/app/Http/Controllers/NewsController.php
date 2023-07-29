<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
     function index(Request $request){

        $res = Http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=259b9f44da414a3fbe937e60bcab49d1');

        $data['news'] = $res->json()['articles'];

        $data['source'] = $data ['news'][0]['source'];

        return view('berita', $data);

        // print_r();

    }

    //  function test(Request $request){

    //     $res = Http::get('https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=772c498c570144e09b72601907269b6a');

    //     $data['news'] = $res->json()['articles'];

    //     // print_r($data);

    //     return view('welcome', $data);

    //     // print_r();

    // }

}
