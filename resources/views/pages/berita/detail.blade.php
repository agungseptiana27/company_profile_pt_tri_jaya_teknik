@extends('layouts.app')

@section('title', $berita->title . ' | ' . config('app.name'))

@section('content')
<section class="py-10">
    <div class="max-w-4xl mx-auto px-4">
        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}" class="w-full rounded-xl mb-6" />

        <h1 class="text-2xl font-bold mb-2">{{ $berita->title }}</h1>
        <p class="text-sm text-gray-500 mb-6">
            {{ $berita->published_at->format('d M Y') }} • {{ $berita->author }}
        </p>

        <div class="prose max-w-none mb-10">
            {!! $berita->content !!}
        </div>

        <!-- Berita Lainnya -->
        @if ($beritaLainnya->count())
        <h3 class="font-bold text-lg mb-4">Berita Lainnya</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 justify-center">
            @foreach ($beritaLainnya as $lain)
            <a href="{{ route('berita.detail', $lain->slug) }}"
                class="block bg-white rounded-xl shadow overflow-hidden group max-w-[200px] mx-auto">
                <img src="{{ asset('storage/' . $lain->image) }}" alt="{{ $lain->title }}"
                    class="w-[200px] h-[140px] object-cover group-hover:scale-105 transition" />
                <div class="p-3 text-center">
                    <p class="text-sm text-gray-500">{{ $lain->published_at->format('d M Y') }}</p>
                    <h4 class="font-bold text-sm">{{ $lain->title }}</h4>
                </div>
            </a>
            @endforeach
        </div>
        @endif

    </div>
</section>
@endsection