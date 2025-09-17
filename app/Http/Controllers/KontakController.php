<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('pages.kontak.index', compact('contact'));
    }
}