@extends('layouts.app')

@section('title', 'Berita | ' . config('app.name'))

@section('content')
<section class="py-10">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-6">Berita Terbaru</h2>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($beritas as $item)
            <a href="{{ route('berita.detail', $item->slug) }}"
                class="block bg-white rounded-xl shadow overflow-hidden group">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                    class="h-48 w-full object-cover group-hover:scale-105 transition" />
                <div class="p-4">
                    <p class="text-sm text-gray-500">{{ $item->published_at->format('d M Y') }}</p>
                    <h3 class="font-bold text-lg">{{ $item->title }}</h3>
                </div>
            </a>
            @empty
            <p class="text-center col-span-3 text-gray-500">Belum ada berita.</p>
            @endforelse
        </div>

        <div class="mt-6">
            {{ $beritas->links() }}
        </div>
    </div>
</section>
@endsection