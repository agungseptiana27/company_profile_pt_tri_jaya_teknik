<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\Iso;
use App\Models\Kontruksi;
use App\Models\SertifPersonal;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function sejarah()
    {
        $profile = CompanyProfile::first();
        return view('pages.profil.sejarah', compact('profile'));
    }

    public function kontruksi()
    {
        $kontruksi = Kontruksi::all();
        return view('pages.profil.kontruksi', compact('kontruksi'));
    }

    public function iso()
    {
        $iso = Iso::all();
        return view('pages.profil.iso', compact('iso'));
    }
    public function personal()
    {
        $sertifPersonal = SertifPersonal::all();
        return view('pages.profil.personal', compact('sertifPersonal'));
    }
}
