@extends('layouts.app')

@section('title', 'Stamping |' .config('app.name'))

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-3xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Stamping
        </h2>

        <!-- Tab Menu -->
        <div class="flex mb-10 space-x-2">
            @foreach ($categoriesStamping as $cat)
            <a href="{{ route('produk.stamping', ['category' => $cat->id]) }}" class="px-4 py-2 
                {{ ($selectedCategoryStamping == $cat->id || (!$selectedCategoryStamping && $loop->first))
                    ? 'font-semibold text-[#0D3300] border-b-2 border-[#0D3300]'
                    : 'text-gray-600 hover:text-[#0D3300] border-b-2 border-transparent hover:border-[#0D3300]' }}">
                {{ $cat->name }}
            </a>
            @endforeach
        </div>


        <!-- Grid Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($stamping as $item)
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col">
                <div class="aspect-square">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                        class="w-full h-full object-cover">
                </div>
                <div class="p-4 text-justify">
                    <h3 class="font-semibold text-lg text-[#0D3300]">{{ $item->title }}</h3>

                    @if(!empty($item->dimension))
                    <p class="text-sm text-gray-600">Dimension: {{ $item->dimension }}</p>
                    @endif
                </div>

            </div>
            @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada produk untuk kategori ini.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            {{ $stamping->links() }}
        </div>
    </div>
</section>

@endsection