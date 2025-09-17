@extends('layouts.app')

@section('title', 'Sertifikasi Personal | ' . config('app.name'))

@section('content')
<section class="py-12" x-data="{ open: false, imgSrc: '' }">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Sertifikasi Keahlian
        </h2>

        <!-- Tabel -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-gradient-to-b from-[#269900] to-[#0D3300] text-white">
                        <th class="px-4 py-3 w-16">No</th>
                        <th class="px-4 py-3">Licence</th>
                        <th class="px-4 py-3">Nama Pekerja</th>
                        <th class="px-4 py-3">Jabatan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($sertifPersonal as $index => $personal)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3">{{ $index + 1 }}</td>
                            <td class="px-4 py-3">
                                @if($personal->image)
                                    <img 
                                        src="{{ asset('storage/' . $personal->image) }}" 
                                        alt="{{ $personal->nama_pekerja }}" 
                                        class="w-16 h-16 object-cover cursor-pointer"
                                        @click="open = true; imgSrc='{{ asset('storage/' . $personal->image) }}'"
                                    >
                                @endif
                            </td>
                            <td class="px-4 py-3 font-medium">{{ $personal->nama_pekerja }}</td>
                            <td class="px-4 py-3">{{ $personal->jabatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Popup -->
        <div 
            class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4"
            x-show="open"
            x-transition
            style="display: none"
            @click.self="open = false"
        >
            <div class="relative bg-white rounded-lg shadow-lg p-4">
                <button class="absolute -top-4 -right-4 text-gray-800 text-3xl font-bold" @click="open = false">&times;</button>
                <img 
                    :src="imgSrc" 
                    alt="Sertifikat" 
                    class="max-w-md max-h-[60vh] w-auto h-auto object-contain"
                >
            </div>
        </div>
    </div>
</section>
@endsection
