<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    $response = Http::get('https://api.npoint.io/99c279bb173a6e28359c/data');
    $data = $response->json();
    // dd($data);
    return view('index', compact('data'));
    // return $response;

    }

    public function show($nomor)
    {
        // dd($nomor);
        $url = 'https://api.npoint.io/99c279bb173a6e28359c/surat/{nomor}';
        $response = Http::get($url);
        $ayat = $response->json();
        // return $ayat;

        return view('surat', compact('ayat'));

    }

}
