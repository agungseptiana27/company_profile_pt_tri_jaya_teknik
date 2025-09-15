@extends('layouts.app')

@section('title', 'Beranda | ' . config('app.name'))

@section('content')

    {{-- Hero Section --}}
    <section class="text-center py-12">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">Selamat Datang di Website Resmi</h1>
        <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">PT Tri Jaya Teknik Karawang</h1>
        <p class="text-gray-600 mt-2">Ini merupakan website resmi dari PT Tri Jaya Teknik</p>
        <div class="mt-6">
            <img src="{{ asset('images/img/banner1.png') }}" alt="Hero" class="mx-auto rounded-lg shadow-lg">
        </div>
    </section>

    {{-- Tentang Perusahaan --}}
    <section class="container mx-auto px-4 py-12">
        <h1 class="text-2xl md:text-3xl font-extrabold text-[#0D3300] mb-4">Tentang Perusahaan</h2>
        <p class="font-medium text-gray-700 mb-6">
            Kepuasan Pelanggan Adalah Kebahagiaan Kami, Kami Siap Melayani Anda.
        </p>

        <div class="grid md:grid-cols-2 gap-8 items-center">
            {{-- Gambar --}}
            <img src="{{ asset('images/img/perusahaan1.jpg') }}" 
                alt="Perusahaan" 
                class="rounded-lg shadow-md w-full h-auto">

            {{-- Konten (posisi tengah) --}}
            <div class="text-left">
                <p class="mb-4 text-gray-600">
                    <strong class="text-[#0D3300]">PT Tri Jaya Teknik Karawang</strong> adalah perusahaan yang bergerak di bidang Engineering, berkomitmen untuk menjawab tantangan perkembangan dunia industri di Indonesia, memenuhi kebutuhan barang yang memuaskan baik dari sisi kualitas, harga, waktu pengirimannya, dan juga ramah lingkungan. 
                </p>
                
                {{-- Tombol Selengkapnya --}}
                <a href="#"
                class="mt-2 inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                        bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
                    Selengkapnya
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>

    </section>



    {{-- Sertifikasi Konstruksi --}}
    <section class="container mx-auto px-4 py-12">
        {{-- Header: Judul + Deskripsi + Tombol --}}
        <div class="flex justify-between items-start mb-6">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">
                    Sertifikasi Konstruksi
                </h1>
                <p class="font-medium text-gray-700">
                    Berikut merupakan Sertifikasi Konstruksi PT Tri Jaya Teknik Karawang
                </p>
            </div>
            <a href="#"
            class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                    bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
                Selengkapnya
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        {{-- Grid Sertifikat --}}
        <div class="grid md:grid-cols-3 gap-4">
            <img src="{{ asset('images/img/sertifikat_pt1.png') }}" alt="Sertifikat 1" class="rounded shadow-md">
            <img src="{{ asset('images/img/sertifikat_pt1.png') }}" alt="Sertifikat 2" class="rounded shadow-md">
            <img src="{{ asset('images/img/sertifikat_pt1.png') }}" alt="Sertifikat 3" class="rounded shadow-md">
        </div>
    </section>



    {{-- Sertifikasi ISO --}}
    <section class="container mx-auto px-4 py-12 bg-gradient-to-r from-[#D9FFCC] rounded-lg">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300] text-center">Sertifikasi ISO</h1>
        <p class="font-medium text-gray-700 text-center">
            Berikut merupakan Sertifikasi ISO PT Tri Jaya Teknik Karawang
        </p>
        <img src="{{ asset('images/img/sertifikat_iso.png') }}" alt="ISO Certificate" class="mx-auto shadow-lg rounded-md">
    </section>

    {{-- Layanan Kami --}}
    <section class="container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold text-[#0D3300] mb-2">Layanan Kami</h2>
        <p class="text-gray-700 mb-6">Berikut merupakan layanan PT Tri Jaya Teknik Karawang</p>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Item --}}
            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan1.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                {{-- Overlay --}}
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">SPM</h3>
                </div>
            </div>

            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan2.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">Dies</h3>
                </div>
            </div>

            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan3.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">Jig</h3>
                </div>
            </div>

            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan4.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">Stamping</h3>
                </div>
            </div>

            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan5.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">Pallet</h3>
                </div>
            </div>

            <div class="relative group cursor-pointer">
                <img src="{{ asset('images/img/layanan6.png') }}" 
                    class="w-full h-48 object-cover rounded-lg shadow-md">
                <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                    <h3 class="text-white font-bold text-lg">Machining</h3>
                </div>
            </div>
        </div>
    </section>



    {{-- Berita Terbaru --}}
    <section class="container mx-auto px-4 py-12">
        {{-- Header: Judul + Deskripsi + Tombol --}}
        <div class="flex justify-between items-start mb-6">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">
                    Berita Terbaru
                </h1>
                <p class="font-medium text-gray-700">
                    Berikut merupakan berita terbaru PT Tri Jaya Teknik Karawang
                </p>
            </div>
            <a href="#"
            class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                    bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
                Selengkapnya
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Item --}}
            <div class="relative overflow-hidden group cursor-pointer">
                <img src="{{ asset('images/img/berita1.png') }}" 
                    class="w-full aspect-square object-cover">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <p class="text-sm text-gray-300">03 September 2025</p>
                    <h3 class="text-white font-semibold group-hover:underline">
                        Menggunakan Fasilitas Terbaru 2025
                    </h3>
                </div>
            </div>

            <div class="relative overflow-hidden group cursor-pointer">
                <img src="{{ asset('images/img/berita2.png') }}" 
                    class="w-full aspect-square object-cover">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <p class="text-sm text-gray-300">02 September 2025</p>
                    <h3 class="text-white font-semibold group-hover:underline">
                        Persiapan Menghadapi Revolusi Industri 4.0
                    </h3>
                </div>
            </div>

            <div class="relative overflow-hidden group cursor-pointer">
                <img src="{{ asset('images/img/berita3.png') }}" 
                    class="w-full aspect-square object-cover">
                <div class="absolute bottom-0 left-0 right-0 p-4">
                    <p class="text-sm text-gray-300">01 September 2025</p>
                    <h3 class="text-white font-semibold group-hover:underline">
                        Pameran Industri di Negara Jepang
                    </h3>
                </div>
            </div>
        </div>

    </section>



@endsection
