@extends('layouts.app')

@section('title', 'Civil |' .config('app.name'))

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-3xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Civil
        </h2>

        <!-- Grid Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($civil as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <div class="aspect-square bg-gray-100 flex items-center justify-center overflow-hidden">
                    @if ($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                        class="w-full h-full object-cover">
                    @else
                    <div class="text-gray-400 text-sm">No Image</div>
                    @endif
                </div>
                <div class="p-4 text-justify">
                    <h3 class="font-semibold text-lg text-[#0D3300]">{{ $item->title }}</h3>

                    @if(!empty($item->project))
                    <p class="text-sm text-gray-600">Dimension: {{ $item->project }}</p>
                    @endif
                </div>

            </div>
            @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada produk untuk kategori ini.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            {{ $civil->links() }}
        </div>
    </div>
</section>

@endsection