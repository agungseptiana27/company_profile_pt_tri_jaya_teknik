<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $perPage = request()->get('per_page', 5);

        // kalau pilih "all", ambil semua data tanpa paginate
        if ($perPage === 'all') {
            $customers = Customer::all();
        } else {
            $customers = Customer::paginate($perPage)->appends(['per_page' => $perPage]);
        }
        return view('pages.pelanggan.index', compact('customers', 'perPage'));
    }
}