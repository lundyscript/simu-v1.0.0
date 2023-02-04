<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Profil;

class ArtikelController extends Controller
{
    public function index()
    {
        $judul = '';
        if (request('kategori')) {
            $kategori = Kategori::firstWhere('slug', request('kategori'));
            $judul = ' in ' . $kategori->name;
        }
        if (request('penulis')) {
            $penulis = User::firstWhere('username', request('penulis'));
            $judul = ' by ' . $penulis->name;
        }
        return view('informasi', [
            "judul" => "Media Informasi" . $judul,
            "artikel" => Artikel::where('status_id', 2)->latest()->Filter(request(['cari', 'kategori', 'penulis']))->paginate(8)->withQueryString()
        ]);
    }
    public function show(Artikel $post)
    {
        return view('post', [
            "singlepost" => $post
        ]);
    }
    public function facade()
    {
        return view('home', [
            "profil" => Profil::all(),
            "artikel" => Artikel::where('status_id', 2)->latest()->paginate(6)
        ]);
    }
}
