@extends('layouts.app')

@section('title', 'Fabrication | ' . config('app.name'))

@section('content')
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-3xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Fabrication
        </h2>

        <!-- Dropdown Filter Kategori -->
        <div class="flex justify-end mb-6">
            <form method="GET" action="{{ route('produk.fabrication') }}" class="relative w-40 sm:w-44 md:w-48">
                <select name="category" onchange="this.form.submit()" class="appearance-none w-full bg-white border border-gray-300 rounded-md pl-3 pr-8 py-1.5 text-sm text-gray-700
                   focus:outline-none focus:ring-1 focus:ring-[#0D3300] focus:border-[#0D3300] transition">
                    <option value="">-- Semua Kategori --</option>

                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $selectedCategory == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                    @endforeach

                    <option value="none" {{ $selectedCategory === 'none' ? 'selected' : '' }}>
                        Lainnya
                    </option>
                </select>

                <!-- Icon dropdown -->
                <svg class="w-3.5 h-3.5 absolute right-2 top-2.5 text-gray-500 pointer-events-none" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </form>
        </div>



        <!-- Grid Produk -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($products as $item)
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

                    @if(!empty($item->material))
                    <p class="text-sm text-gray-600">Material: {{ $item->material }}</p>
                    @endif

                    @if(!empty($item->type))
                    <p class="text-sm text-gray-600">Type: {{ $item->type }}</p>
                    @endif

                    @if(!empty($item->capacity))
                    <p class="text-sm text-gray-600">Capacity: {{ $item->capacity }}</p>
                    @endif

                    @if(!empty($item->process))
                    <p class="text-sm text-gray-600">Process: {{ $item->process }}</p>
                    @endif
                </div>
            </div>
            @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada produk untuk kategori ini.</p>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-10">
            {{ $products->links() }}
        </div>
    </div>
</section>
@endsection