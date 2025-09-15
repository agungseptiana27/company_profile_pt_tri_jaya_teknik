<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('pages.berita.index');
    }

    public function detailBerita()
    {
        return view('pages.berita.detail');
    }
}
