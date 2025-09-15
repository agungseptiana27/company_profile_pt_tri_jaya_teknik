@extends('layouts.app')

@section('title', 'Fabrication |' .config('app.name'))

@section('content')
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Judul -->
            <h2 class="text-3xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Fabrication
            </h2>

            <!-- Tab Menu -->
            <div class="flex  mb-10">
                <button class="px-4 py-2 font-semibold text-[#0D3300] border-b-2 border-[#0D3300]">
                    Conveyer
                </button>
                <button class="px-4 py-2 text-gray-600 hover:text-[#0D3300] border-b-2 border-transparent hover:border-[#0D3300]">
                    Tank
                </button>
                <button class="px-4 py-2 text-gray-600 hover:text-[#0D3300] border-b-2 border-transparent hover:border-[#0D3300]">
                    Pallet
                </button>
                <button class="px-4 py-2 text-gray-600 hover:text-[#0D3300] border-b-2 border-transparent hover:border-[#0D3300]">
                    Ducting
                </button>
            </div>


            <!-- Grid Produk -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                    <div class="aspect-square">
                    <img src="{{ asset('images/img/produk1.png') }}" 
                        alt="Produk" 
                        class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                    <h3 class="font-semibold text-lg text-[#0D3300]">Belt Conveyer Transfer Box</h3>
                    <p class="text-sm text-gray-600">Type: Electric</p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                    <div class="aspect-square">
                    <img src="{{ asset('images/img/produk2.png') }}" 
                        alt="Produk" 
                        class="w-full h-full object-cover">
                    </div>
                    <div class="p-4 text-center">
                    <h3 class="font-semibold text-lg text-[#0D3300]">Belt Conveyer</h3>
                    <p class="text-sm text-gray-600">Type: Electric</p>
                    </div>
                </div>

            <!-- Card lainnya sama format -->
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-10 space-x-2">
            <button class="px-3 py-1 border rounded bg-green-600 text-white">1</button>
            <button class="px-3 py-1 border rounded hover:bg-green-100">2</button>
            <button class="px-3 py-1 border rounded hover:bg-green-100">3</button>
            <button class="px-3 py-1 border rounded hover:bg-green-100">4</button>
            <button class="px-3 py-1 border rounded hover:bg-green-100">5</button>
            </div>
        </div>
    </section>

@endsection