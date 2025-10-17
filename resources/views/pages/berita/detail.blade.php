@extends('layouts.app')

@section('title', $berita->title . ' | ' . config('app.name'))

@section('content')
<section class="py-10">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-2xl font-bold mb-2">{{ $berita->title }}</h1>
        <p class="text-sm text-gray-500 mb-6">
            {{ $berita->published_at->format('d M Y') }} • {{ $berita->author }}
        </p>

        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-full rounded-xl mb-6" />

        <div class="prose max-w-none mb-10">
            {!! $berita->content !!}
        </div>

        <!-- Berita Lainnya -->
        @if ($beritaLainnya->count())
        <div class="mt-12">
            <div class="flex justify-between items-start mb-6">
                <div>
                    <h3 class="text-xl font-bold text-[#0D3300]">Berita Lainnya</h3>
                    <p class="text-gray-700">Baca berita menarik lainnya dari PT Tri Jaya Teknik Karawang</p>
                </div>
                <a href="{{ route('berita.index') }}" class="inline-flex items-center px-4 py-2 rounded-lg text-white font-semibold 
                bg-gradient-to-b from-[#269900] to-[#0D3300] hover:opacity-90 transition">
                    Selengkapnya
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($beritaLainnya as $lain)
                <a href="{{ route('berita.detail', $lain->slug) }}"
                    class="relative overflow-hidden group cursor-pointer rounded-xl">
                    <img src="{{ asset('storage/' . $lain->image) }}" alt="{{ $lain->title }}"
                        class="w-full aspect-square object-cover transition duration-500 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/70 to-transparent">
                        <p class="text-sm text-gray-300">{{ $lain->published_at->format('d F Y') }}</p>
                        <h4 class="text-white font-semibold group-hover:underline line-clamp-2">{{ $lain->title }}</h4>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif


    </div>
</section>
@endsection