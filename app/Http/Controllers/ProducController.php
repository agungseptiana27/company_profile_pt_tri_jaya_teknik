<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducController extends Controller
{
    public function fabrication()
    {
        return view('pages.produk.fabrication');
    }

    public function jig()
    {
        return view('pages.produk.jig');
    }

    public function machining()
    {
        return view('pages.produk.machining');
    }

    public function stamping() {
        return view('pages.produk.stamping');
    }

    public function spm() {
        return view('pages.produk.spm');
    }

    public function civil()
    {
        return view('pages.produk.civil');
    }
}
