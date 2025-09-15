@extends('layouts.app')

@section('title', 'Berita | ' .config('app.name'))

@section('content')
    <section class="py-10">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6">Berita Terbaru</h2>
            <div class="grid md:grid-cols-3 gap-6">
                    <a href="{{ route('berita.detail') }}" class="block bg-white rounded-xl shadow overflow-hidden group">
                        <img src="{{ asset('images/img/berita4.png') }}" class="h-48 w-full object-cover group-hover:scale-105 transition" />
                        <div class="p-4">
                            <p class="text-sm text-gray-500">03 September 2025</p>
                            <h3 class="font-bold text-lg">Menggunakan Fasilitas Terbaru 2025</h3>
                        </div>
                    </a>
                    <a href="" class="block bg-white rounded-xl shadow overflow-hidden group">
                        <img src="{{ asset('images/img/berita4.png') }}" class="h-48 w-full object-cover group-hover:scale-105 transition" />
                        <div class="p-4">
                            <p class="text-sm text-gray-500">03 September 2025</p>
                            <h3 class="font-bold text-lg">Menggunakan Fasilitas Terbaru 2025</h3>
                        </div>
                    </a>
                    <a href="" class="block bg-white rounded-xl shadow overflow-hidden group">
                        <img src="{{ asset('images/img/berita4.png') }}" class="h-48 w-full object-cover group-hover:scale-105 transition" />
                        <div class="p-4">
                            <p class="text-sm text-gray-500">03 September 2025</p>
                            <h3 class="font-bold text-lg">Menggunakan Fasilitas Terbaru 2025</h3>
                        </div>
                    </a>
            </div>
        </div>
    </section>
@endsection