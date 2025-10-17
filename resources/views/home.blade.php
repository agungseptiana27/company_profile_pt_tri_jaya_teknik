@extends('layouts.app')

@section('title', 'Beranda | ' . config('app.name'))

@section('content')

@section('style')
<style>
* {
    box-sizing: border-box;
}

html,
body {
    overflow-x: hidden;
    width: 100%;
}
</style>
@endsection

{{-- Hero Section --}}
<section class="text-center py-12">
    <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">Selamat Datang di Website Resmi</h1>
    <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">PT Tri Jaya Teknik Karawang</h1>
    <p class="text-gray-600 mt-2">Ini merupakan website resmi dari PT Tri Jaya Teknik</p>
    <div class="slider">
        <div class="list">
            @foreach($banners as $banner)
            <div class="item">
                <img src="{{ asset('storage/' . $banner->gambar) }}" alt="">
            </div>
            @endforeach
        </div>

        <div class="thumbnail">
            @foreach($banners as $banner)
            <div class="item">
                <img src="{{ asset('storage/' . $banner->gambar) }}" alt="">
            </div>
            @endforeach
        </div>

        <div class="nextPrevArrows">
            <button class="prev">
                << /button>
                    <button class="next">></button>
        </div>
    </div>
</section>

{{-- Tentang Perusahaan --}}
<section class="container mx-auto px-4 py-12">
    <h1 class="text-2xl md:text-3xl font-extrabold text-[#0D3300] mb-4">Tentang Perusahaan</h1>
    <p class="font-medium text-gray-700 mb-6">
        Kepuasan Pelanggan Adalah Kebahagiaan Kami, Kami Siap Melayani Anda.
    </p>

    <div class="grid md:grid-cols-2 gap-8 items-center">
        <img src="{{ asset('images/img/perusahaan1.jpg') }}" alt="Perusahaan"
            class="rounded-lg shadow-md w-full h-auto">
        <div class="text-left">
            <p class="mb-4 text-gray-600">
                <strong class="text-[#0D3300]">PT Tri Jaya Teknik Karawang</strong> adalah perusahaan yang bergerak
                di bidang Engineering, berkomitmen untuk menjawab tantangan perkembangan dunia industri di
                Indonesia, memenuhi kebutuhan barang yang memuaskan baik dari sisi kualitas, harga, waktu
                pengirimannya, dan juga ramah lingkungan.
            </p>

            <a href="{{ route('profil.sejarah') }}" class="mt-2 inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
                Selengkapnya
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- Sertifikasi Konstruksi & ISO dengan Popup --}}
<section class="container mx-auto px-4 py-12" x-data="{ open: false, imgSrc: '' }">
    {{-- Sertifikasi Konstruksi --}}
    <div class="flex justify-between items-start mb-6">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">Sertifikasi Konstruksi</h1>
            <p class="font-medium text-gray-700">
                Berikut merupakan Sertifikasi Konstruksi PT Tri Jaya Teknik Karawang
            </p>
        </div>
        <a href="{{ route('profil.kontruksi') }}" class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
            bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
            Selengkapnya
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-4 mb-12">
        @foreach ($kontruksi as $item)
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title ?? 'Sertifikat' }}"
            class="rounded shadow-md cursor-pointer hover:opacity-80 transition"
            @click="open = true; imgSrc = '{{ asset('storage/' . $item->image) }}'">
        @endforeach
    </div>

    {{-- Sertifikasi ISO --}}
    <div class="bg-gradient-to-r from-[#D9FFCC] rounded-lg py-12 px-4">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300] text-center">Sertifikasi ISO</h1>
        <p class="font-medium text-gray-700 text-center mb-8">
            Berikut merupakan Sertifikasi ISO PT Tri Jaya Teknik Karawang
        </p>
        <div class="@if($iso->count() === 1) flex justify-center @else grid md:grid-cols-3 gap-4 @endif">
            @foreach ($iso as $item)
            <img src="{{ asset('storage/' .$item->image) }}" alt="ISO Certificate"
                class="mx-auto shadow-lg rounded-md cursor-pointer hover:opacity-80 transition"
                @click="open = true; imgSrc = '{{ asset('storage/' .$item->image) }}'">
            @endforeach
        </div>
    </div>

    {{-- Popup Modal --}}
    <div class="fixed inset-0 bg-black/70 flex items-center justify-center z-[9999] p-4" x-show="open" x-transition
        x-cloak @click.self="open = false">

        <div class="relative">
            <button class="absolute -top-6 -right-6 text-white text-3xl font-bold"
                @click="open = false">&times;</button>
            <img :src="imgSrc" alt="Sertifikat"
                class="rounded-lg shadow-lg max-w-3xl max-h-[80vh] w-auto h-auto object-contain">
        </div>
    </div>
</section>

{{-- Layanan Kami --}}
<!-- <section class="container mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold text-[#0D3300] mb-2">Layanan Kami</h2>
    <p class="text-gray-700 mb-6">Berikut merupakan layanan PT Tri Jaya Teknik Karawang</p>
    <div class="grid md:grid-cols-3 gap-6">
        @foreach ([$fabrication, $jig, $machining, $stamping, $spm, $civil] as $category)
        @foreach ($category as $item)
        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">
                    {{ ucfirst($loop->parent->index == 0 ? 'Fabrication' : ($loop->parent->index == 1 ? 'Jig' : ($loop->parent->index == 2 ? 'Machining' : ($loop->parent->index == 3 ? 'Stamping' : ($loop->parent->index == 4 ? 'SPM' : 'Civil'))))) }}
                </h3>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
</section> -->

{{-- Layanan Kami --}}
<section class="container mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold text-[#0D3300] mb-2">Layanan Kami</h2>
    <p class="text-gray-700 mb-10">Berikut merupakan layanan PT Tri Jaya Teknik Karawang</p>

    <div class="grid md:grid-cols-4 gap-8 text-center">
        {{-- Civil --}}
        <a href="{{ route('produk.civil') }}"
            class="group flex flex-col items-center transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/icons/civil-green.png') }}" alt="Civil"
                class="w-16 h-16 mb-4 transition duration-300 group-hover:grayscale group-hover:brightness-0">
            <h3 class="text-lg font-bold text-[#0D3300] mb-2">Civil</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Proses pembangunan infrastruktur dengan standar keselamatan dan kualitas tinggi
                untuk memenuhi kebutuhan industri.
            </p>
        </a>

        {{-- Fabrication --}}
        <a href="{{ route('produk.fabrication') }}"
            class="group flex flex-col items-center transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/icons/fabrication-green.png') }}" alt="Fabrication"
                class="w-16 h-16 mb-4 transition duration-300 group-hover:grayscale group-hover:brightness-0">
            <h3 class="text-lg font-bold text-[#0D3300] mb-2">Fabrication</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Mencakup perakitan dan pengelasan berbagai material untuk menghasilkan struktur kuat dan fungsional.
            </p>
        </a>

        {{-- Machining --}}
        <a href="{{ route('produk.machining') }}"
            class="group flex flex-col items-center transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/icons/machining-green.png') }}" alt="Machining"
                class="w-16 h-16 mb-4 transition duration-300 group-hover:grayscale group-hover:brightness-0">
            <h3 class="text-lg font-bold text-[#0D3300] mb-2">Machining</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Proses pembentukan logam dengan mesin presisi untuk menciptakan produk dengan bentuk dan ukuran akurat.
            </p>
        </a>

        {{-- Stamping --}}
        <a href="{{ route('produk.stamping') }}"
            class="group flex flex-col items-center transition-transform duration-300 hover:scale-105">
            <img src="{{ asset('images/icons/stamping-green.png') }}" alt="Stamping"
                class="w-16 h-16 mb-4 transition duration-300 group-hover:grayscale group-hover:brightness-0">
            <h3 class="text-lg font-bold text-[#0D3300] mb-2">Stamping</h3>
            <p class="text-gray-600 text-sm leading-relaxed">
                Proses pembentukan komponen presisi menggunakan peralatan modern untuk mencapai hasil terbaik.
            </p>
        </a>
    </div>
</section>


{{-- Berita Terbaru --}}
<section class="container mx-auto px-4 py-12">
    <div class="flex justify-between items-start mb-6">
        <div>
            <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300]">Berita Terbaru</h1>
            <p class="font-medium text-gray-700">
                Berikut merupakan berita terbaru PT Tri Jaya Teknik Karawang
            </p>
        </div>
        <a href="{{ route('berita.index') }}" class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
            bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
            Selengkapnya
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        @foreach($beritaTerbaru as $berita)
        <a href="{{ route('berita.detail', $berita->slug) }}" class="relative overflow-hidden group cursor-pointer">
            <img src="{{ asset('storage/' . $berita->image) }}" class="w-full aspect-square object-cover">
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <p class="text-sm text-gray-300">{{ $berita->published_at->format('d F Y') }}</p>
                <h3 class="text-white font-semibold group-hover:underline">{{ $berita->title }}</h3>
            </div>
        </a>
        @endforeach
    </div>
</section>

@endsection