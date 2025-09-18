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
                < </button>
                    <button class="next"> > </button>
        </div>
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
            <img src="{{ asset('images/img/perusahaan1.jpg') }}" alt="Perusahaan"
                class="rounded-lg shadow-md w-full h-auto">

            {{-- Konten (posisi tengah) --}}
            <div class="text-left">
                <p class="mb-4 text-gray-600">
                    <strong class="text-[#0D3300]">PT Tri Jaya Teknik Karawang</strong> adalah perusahaan yang bergerak
                    di bidang Engineering, berkomitmen untuk menjawab tantangan perkembangan dunia industri di
                    Indonesia, memenuhi kebutuhan barang yang memuaskan baik dari sisi kualitas, harga, waktu
                    pengirimannya, dan juga ramah lingkungan.
                </p>

                {{-- Tombol Selengkapnya --}}
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
        <a href="{{ route('profil.kontruksi') }}" class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                    bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
            Selengkapnya
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    {{-- Grid Sertifikat --}}
    <div class="grid md:grid-cols-3 gap-4">
        @foreach ($kontruksi as $item)
        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title ?? 'Sertifikat' }}"
            class="rounded shadow-md">
        @endforeach
    </div>
</section>



{{-- Sertifikasi ISO --}}
<section class="container mx-auto px-4 py-12 bg-gradient-to-r from-[#D9FFCC] rounded-lg">
    <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300] text-center">Sertifikasi ISO</h1>
    <p class="font-medium text-gray-700 text-center">
        Berikut merupakan Sertifikasi ISO PT Tri Jaya Teknik Karawang
    </p>
    @foreach ($iso as $item)
    <img src="{{ asset('storage/' .$item->image) }}" alt="ISO Certificate" class="mx-auto shadow-lg rounded-md">
    @endforeach
</section>

{{-- Layanan Kami --}}
<section class="container mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold text-[#0D3300] mb-2">Layanan Kami</h2>
    <p class="text-gray-700 mb-6">Berikut merupakan layanan PT Tri Jaya Teknik Karawang</p>

    <div class="grid md:grid-cols-3 gap-6">
        {{-- Item --}}
        @foreach ($fabrication as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">Fabrication</h3>
            </div>
        </div>
        @endforeach

        @foreach ($jig as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">Jig</h3>
            </div>
        </div>
        @endforeach

        @foreach ($machining as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">Machining</h3>
            </div>
        </div>
        @endforeach

        @foreach ($stamping as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">Stamping</h3>
            </div>
        </div>
        @endforeach

        @foreach ($spm as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">SPM</h3>
            </div>
        </div>
        @endforeach

        @foreach ($civil as $item)

        <div class="relative group cursor-pointer">
            <img src="{{ asset('storage/' .$item->image) }}" class="w-full h-48 object-cover rounded-lg shadow-md">
            {{-- Overlay --}}
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center 
                            opacity-0 group-hover:opacity-100 transition duration-300 rounded-lg">
                <h3 class="text-white font-bold text-lg">Civil</h3>
            </div>
        </div>
        @endforeach
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
        <a href="{{ route('berita.index') }}" class="inline-flex items-center px-5 py-2 rounded-lg text-white font-semibold 
                    bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
            Selengkapnya
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
        {{-- Item --}}
        @foreach($beritaTerbaru as $berita)
        <a href="{{ route('berita.detail', $berita->slug) }}" class="relative overflow-hidden group cursor-pointer">
            <img src="{{ asset('storage/' . $berita->image) }}" class="w-full aspect-square object-cover">
            <div class="absolute bottom-0 left-0 right-0 p-4">
                <p class="text-sm text-gray-300">
                    {{ $berita->published_at->format('d F Y') }}
                </p>
                <h3 class="text-white font-semibold group-hover:underline">
                    {{ $berita->title }}
                </h3>
            </div>
        </a>
        @endforeach
    </div>

</section>



@endsection