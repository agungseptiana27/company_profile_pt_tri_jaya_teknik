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
    public function fabrication(Request $request)
    {
        // Ambil semua kategori (untuk tab menu)
        $categories = FabricationCategory::all();
        
        // Ambil kategori dari query string (?category=...)
        $selectedCategory = $request->get('category');

        // Kalau tidak ada kategori di query, pakai kategori pertama
        if (!$selectedCategory && $categories->isNotEmpty()) {
            $selectedCategory = $categories->first()->id; 
        }

        // Query produk
        $products = Fabrication::where('fabrication_category_id', $selectedCategory)
        ->latest()
        ->paginate(6)
        ->withQueryString();

        return view('pages.produk.fabrication', compact('selectedCategory', 'categories', 'products'));
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
        // Ambil semua kategori (untuk tab menu)
        $categoriesStamping = KategoriStamping::all();
        
        // Ambil kategori dari query string (?category=...)
        $selectedCategoryStamping = $request->get('category');

        // Kalau tidak ada kategori di query, pakai kategori pertama
        if (!$selectedCategoryStamping && $categoriesStamping->isNotEmpty()) {
            $selectedCategoryStamping = $categoriesStamping->first()->id; 
        }

        // Query produk
        $stamping = Stamping::where('stamping_category_id', $selectedCategoryStamping)
        ->latest()
        ->paginate(6)
        ->withQueryString();
        
        return view('pages.produk.stamping', compact('stamping', 'categoriesStamping', 'selectedCategoryStamping'));
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