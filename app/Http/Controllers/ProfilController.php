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
    
    public function personal(Request $request)
    {
        $perPage   = $request->get('per_page', 10);
        $search    = $request->get('search');
        $keahlian  = $request->get('keahlian');
        $sort      = $request->get('sort', 'asc');

        $query = SertifPersonal::query();

        // filter pencarian
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_pekerja', 'like', "%{$search}%")
                ->orWhere('keahlian', 'like', "%{$search}%");
            });
        }

        // filter keahlian
        if ($keahlian) {
            $query->where('keahlian', $keahlian);
        }

        // sorting
        $query->orderBy('nama_pekerja', $sort);

        // pagination
        if ($perPage === 'all') {
            $sertifPersonal = $query->get();
        } else {
            $sertifPersonal = $query->paginate($perPage)
                ->appends($request->all()); // biar query tetap ada di pagination
        }

        $listKeahlian = SertifPersonal::pluck('keahlian')->unique();

        return view('pages.profil.personal', compact('sertifPersonal', 'perPage', 'search', 'keahlian', 'sort', 'listKeahlian'));
    }


}