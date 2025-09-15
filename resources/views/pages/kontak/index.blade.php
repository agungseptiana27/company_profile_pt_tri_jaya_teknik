@extends('layouts.app')

@section('title', 'Kontak |' .config('app.name'))

@section('content')
    <!-- Hero Image -->
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <div class="relative rounded-lg overflow-hidden shadow-md">
            <img 
                src="{{ asset('images/img/gedung.png') }}" 
                alt="Gedung PT Tri Jaya Teknik Karawang" 
                class="w-full h-72 object-cover"
            >
            <!-- Overlay Judul -->
            <div class="absolute inset-0 flex items-center justify-center">
                <h1 class="text-2xl md:text-4xl font-bold text-white text-center drop-shadow-lg">
                Kontak PT Tri Jaya Teknik Karawang
                </h1>
            </div>
            </div>
        </div>
    </section>


    <!-- Kontak Info + Maps -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-8">
            
            <!-- Info dengan Tabel : di tengah -->
            <div class="overflow-x-auto flex justify-center">
                <table class="text-left">
                    <tbody>
                    <tr class="align-top">
                        <td class="font-semibold pr-4 pb-2">Nama Perusahaan</td>
                        <td class="w-10 text-center pb-2">:</td>
                        <td class="pb-2">PT Tri Jaya Teknik Karawang</td>
                    </tr>
                    <tr class="align-top">
                        <td class="font-semibold pr-4 pb-2">Alamat Perusahaan</td>
                        <td class="w-10 text-center pb-2">:</td>
                        <td class="pb-2">
                        Jalan Alternatif Jl. Krajan II,<br>
                        Warungbambu, Karawang Timur,<br>
                        Karawang, West Java 41371
                        </td>
                    </tr>
                    <tr class="align-top">
                        <td class="font-semibold pr-4 pb-2">No. Telp</td>
                        <td class="w-10 text-center pb-2">:</td>
                        <td class="pb-2">+62 267-8615387</td>
                    </tr>
                    <tr class="align-top">
                        <td class="font-semibold pr-4">Email</td>
                        <td class="w-10 text-center">:</td>
                        <td>pt.tjtk@yahoo.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>





            <!-- Map -->
            <div class="w-full h-64 md:h-auto">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!..." 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
            </div>
        </div>
    </section>


@endsection