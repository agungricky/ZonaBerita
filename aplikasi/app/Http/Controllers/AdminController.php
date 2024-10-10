<?php

namespace App\Http\Controllers;

use App\Models\Berita_populer;
use App\Models\berita_utama;
use App\Models\Kategori;
use App\Models\Konten_beritacepat;
use App\Models\postingan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function __construct()
    {
        $kategori = Kategori::all();
        Inertia::share('kategori', $kategori);
    }
    
    public function login()
    {
        $page = "Login";
        $message = "Login to Your Account";
        $submessage = "Enter your username & password to login";
        return Inertia::render('Login_Register', ['page' => $page,'message' => $message, 'submessage'=>$submessage]);
    }

    public function register()
    {
        $page = "Register";
        $message = "Create an Account";
        $submessage = "Enter your personal details to create account";
        return Inertia::render('Login_Register', ['page' => $page,'message' => $message, 'submessage'=>$submessage]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $count_post = Postingan::where('Status', 'LIKE', 'Disetujui')->count();
        $count_populer = Berita_populer::count();
        $count_beritaUtama = berita_utama::count();
        $konten_beritaCepat = Konten_beritacepat::count();
        return Inertia::render('Dashboard', compact('count_post','count_populer','count_beritaUtama', 'konten_beritaCepat'));
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
