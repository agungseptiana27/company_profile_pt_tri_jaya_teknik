<?php

namespace App\Http\Controllers;

use App\Models\Civil;
use App\Models\Fabrication;
use App\Models\FabricationCategory;
use App\Models\Jig;
use App\Models\KategoriStamping;
use App\Models\Machining;
use App\Models\SPM;
use App\Models\Stamping;
use Illuminate\Http\Request;

class ProducController extends Controller
{
    // public function fabrication(Request $request)
    // {
    //     // Ambil semua kategori (untuk tab menu)
    //     $categories = FabricationCategory::all();
        
    //     // Ambil kategori dari query string (?category=...)
    //     $selectedCategory = $request->get('category');

    //     // Kalau tidak ada kategori di query, pakai kategori pertama
    //     if (!$selectedCategory && $categories->isNotEmpty()) {
    //         $selectedCategory = $categories->first()->id; 
    //     }

    //     // Query produk
    //     $products = Fabrication::where('fabrication_category_id', $selectedCategory)
    //     ->latest()
    //     ->paginate(6)
    //     ->withQueryString();

    //     return view('pages.produk.fabrication', compact('selectedCategory', 'categories', 'products'));
    // }


    public function fabrication(Request $request)
    {
        $categories = FabricationCategory::all();
        $selectedCategory = $request->get('category');

        // Query dasar
        $query = Fabrication::query();

        if ($selectedCategory === 'none') {
            // Produk tanpa kategori
            $query->whereNull('fabrication_category_id');
        } elseif (!empty($selectedCategory)) {
            // Produk dengan kategori tertentu
            $query->where('fabrication_category_id', $selectedCategory);
        }

        $products = $query->latest()->paginate(6)->withQueryString();

        return view('pages.produk.fabrication', compact('categories', 'selectedCategory', 'products'));
    }


    public function jig()
    {
        $jig = Jig::latest()->paginate(6);
        return view('pages.produk.jig', compact('jig'));
    }

    public function machining()
    {
        $machining = Machining::latest()->paginate(6);
        return view('pages.produk.machining', compact('machining'));
    }

    public function stamping(Request $request) {
        
        $stamping = Stamping::
        latest()->paginate(6);
        
        return view('pages.produk.stamping', compact('stamping'));
    }

    public function spm() {
        $spm = SPM::latest()->paginate(6);
        return view('pages.produk.spm', compact('spm'));
    }

    public function civil()
    {
        $civil = Civil::latest()->paginate(6);
        return view('pages.produk.civil', compact('civil'));
    }
}