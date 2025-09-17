<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
     // Halaman Index
    public function index()
    {
        $beritas = Berita::orderBy('published_at', 'desc')->paginate(6);
        return view('pages.berita.index', compact('beritas'));
    }

    // Halaman Detail
    public function detail($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        $beritaLainnya = Berita::where('id', '!=', $berita->id)
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        return view('pages.berita.detail', compact('berita', 'beritaLainnya'));
    }
}