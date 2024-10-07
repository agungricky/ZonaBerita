<?php

namespace App\Http\Controllers;

use App\Models\Berita_populer;
use App\Models\berita_utama;
use App\Models\Kategori;
use App\Models\Konten_beritacepat;
use App\Models\postingan;
use App\Models\Sub_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $kategori = Kategori::where('Status', 'true')->orderBy('urutan')->get();
        $sub_kategori = Sub_kategori::where('Status', 'true')->get();
        $postingan = postingan::where('Status', 'Disetujui')->get();
        $berita_utama = berita_utama::join('postingan', 'berita_utama.postingan_idpostingan', '=', 'postingan.idpostingan')
            ->join('sub_kategori', 'sub_kategori.idSub_kategori', '=', 'postingan.Sub_kategori_idSub_kategori')
            ->join('kategori', 'kategori.idKategori', '=', 'sub_kategori.Kategori_idKategori')
            ->select('postingan.*', 'berita_utama.*', 'sub_kategori.*', 'kategori.*')
            ->get();
        $berita_populer = Postingan::whereNotNull('view')
            ->where('view', '!=', '')
            ->orderBy('view', 'DESC')
            ->limit(12)->get();
        
        $konten_Beritacepat = Konten_beritacepat::join('kategori', 'kategori.idKategori', 'konten_beritacepat.Kategori_idKategori')->get();
        
        $berita = Sub_kategori::where('sub_kategori.Status', 'true')
        ->join('postingan', 'postingan.Sub_kategori_idSub_kategori', 'sub_kategori.idSub_kategori')
        ->select('postingan.*', 'sub_kategori.*')
        ->get();
  
        $berita_vidio = postingan::whereNotNull('vidio')
        ->where('vidio', '!=', '')
        ->orderBy('created_at', 'desc')
        ->get();

        // dd($sub_kategori);
    
        // URL API lengkap
        // $url = 'https://newsdata.io/api/1/latest?country=id&apikey=pub_519788812d1a8c026ab1963a3be901dd83607';

        // Request ke API
        // $response = Http::get($url);

        // Menampilkan data API
        // dd($response->json());

        return view('index', compact('kategori', 'sub_kategori', 'postingan', 'berita_utama', 'berita_populer', 'konten_Beritacepat', 'berita', 'berita_vidio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
