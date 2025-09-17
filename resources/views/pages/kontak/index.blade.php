@extends('layouts.app')

@section('title', 'Kontak | ' . config('app.name'))

@section('content')
<!-- Hero Image -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- max-w lebih lebar -->
        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset('images/img/gedung.png') }}" alt="Gedung PT Tri Jaya Teknik Karawang"
                class="w-full h-[500px] object-cover"> <!-- naikkan ukuran -->
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-3xl md:text-5xl font-bold text-white text-center drop-shadow-lg">
                    Kontak {{ $contact?->company_name ?? 'Belum ada data' }}
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Kontak Info + Maps -->
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">

        <!-- Info -->
        <div class="space-y-3">
            <!-- Nama Perusahaan -->
            <div class="flex">
                <div class="w-40 font-semibold">Nama Perusahaan</div>
                <div class="w-6 text-center">:</div>
                <div class="flex-1">{{ $contact->company_name ?? '-' }}</div>
            </div>

            <!-- Alamat -->
            <div class="flex">
                <div class="w-40 font-semibold">Alamat</div>
                <div class="w-6 text-center">:</div>
                <div class="flex-1">{!! nl2br(e($contact->address ?? '-')) !!}</div>
            </div>

            <!-- No. Telp -->
            <div class="flex">
                <div class="w-40 font-semibold">No. Telp</div>
                <div class="w-6 text-center">:</div>
                <div class="flex-1">{{ $contact->phone ?? '-'}}</div>
            </div>

            <!-- Email -->
            <div class="flex">
                <div class="w-40 font-semibold">Email</div>
                <div class="w-6 text-center">:</div>
                <div class="flex-1">{{ $contact->email ?? '-'}}</div>
            </div>
        </div>


        <!-- Map -->
        <div>
            @if($contact->map_embed)
            <iframe src="{{ $contact->map_embed }}" class="w-full h-80 rounded-lg shadow" style="border:0;"
                allowfullscreen="" loading="lazy"></iframe>
            @else
            <p class="text-gray-600">Belum ada peta</p>
            @endif
        </div>

    </div>
</section>
@endsection