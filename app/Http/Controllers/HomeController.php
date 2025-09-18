<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\Civil;
use App\Models\Fabrication;
use App\Models\Iso;
use App\Models\Jig;
use App\Models\Kontruksi;
use App\Models\Machining;
use App\Models\SPM;
use App\Models\Stamping;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Berita terbaru
        $beritaTerbaru = Berita::orderBy('published_at', 'desc')->take(6)->get();

        // Produk (misalnya ambil 1-2 tiap kategori untuk preview)
        $fabrication = Fabrication::latest()->take(1)->get();
        $jig        = Jig::latest()->take(1)->get();
        $machining  = Machining::latest()->take(1)->get();
        $stamping   = Stamping::latest()->take(1)->get();
        $spm        = SPM::latest()->take(1)->get();
        $civil      = Civil::latest()->take(1)->get();

        // Sertifikasi
        $iso        = Iso::all();
        $kontruksi  = Kontruksi::all();

        $banners = Banner::where('status', true)->get();

        return view('home', compact(
            'beritaTerbaru', 
            'fabrication', 'jig', 'machining', 'stamping', 'spm', 'civil',
            'iso', 'kontruksi', 'banners'
        ));
    }
}