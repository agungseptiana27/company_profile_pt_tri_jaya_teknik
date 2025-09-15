@extends('layouts.app')

@section('title', 'Sertifikat Iso | ' . config('app.name'))

@section('content')
<section class="container mx-auto px-4 py-12" x-data="{ open: false, imgSrc: '' }">
    <div class="flex justify-center items-start mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0D3300] text-center">
            Sertifikasi Iso
        </h1>
    </div>

    <div class="@if($iso->count() === 1) flex justify-center @else grid md:grid-cols-3 gap-4 @endif">
        @foreach($iso as $isos)
            <div class="rounded shadow-md overflow-hidden">
                <img src="{{ asset('storage/' .$isos->image) }}" 
                    alt="{{ $isos->title ?? 'Sertifikat' }}"
                    class="w-full h-auto object-cover cursor-pointer"
                    @click="open = true; imgSrc = '{{ asset('storage/' .$isos->image) }}'">
                @if($isos->title)
                    <div class="p-2 text-center text-sm text-gray-700">
                        {{ $isos->title }}
                    </div>
                @endif
            </div>
        @endforeach
    </div>


    <div 
        class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4"
        x-show="open"
        x-transition
        @click.self="open = false"
    >
        <div class="relative">
            <button class="absolute -top-6 -right-6 text-white text-3xl font-bold" @click="open = false">&times;</button>

            <img :src="imgSrc" 
                alt="Sertifikat" 
                class="rounded-lg shadow-lg max-w-3xl max-h-[80vh] w-auto h-auto object-contain">
        </div>
    </div>


</section>
@endsection
