<?php

namespace App\Http\Controllers;

use App\Models\Karir;
use Illuminate\Http\Request;

class KarirController extends Controller
{
    public function index()
    {
        $karir = Karir::orderBy('created_at', 'desc')->get();
        return view('pages.karir.index', compact('karir'));
    }
}