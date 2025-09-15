@extends('layouts.app')

@section('title', 'Karir |' .config('app.name'))

@section('content')
    <section id="lowongan" class="py-10">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-6">Lowongan Pekerjaan</h2>

            <!-- Looping lowongan -->
            <div x-data="{ open: false }" class="mb-4 bg-white rounded-xl shadow">
            <!-- Header -->
            <button @click="open = !open"
                class="w-full flex justify-between items-center p-4 font-semibold">
                <div>
                <p>1. Engineering</p>
                <span class="text-sm text-gray-500">Pendidikan S1</span>
                </div>
                <span x-show="!open">▼</span>
                <span x-show="open">▲</span>
            </button>

            <!-- Content -->
            <div x-show="open" x-transition
                class="border-t p-4 grid md:grid-cols-2 gap-6 text-sm">

                <!-- Kiri -->
                <div>
                <h4 class="font-bold">Persyaratan:</h4>
                <ul class="list-disc list-inside mb-4">
                    <li>Syarat 1</li>
                    <li>Syarat 2</li>
                    <li>Syarat 3</li>
                    <li>Syarat 4</li>
                    <li>Syarat 5</li>
                </ul>

                <h4 class="font-bold">Deskripsi Pekerjaan:</h4>
                <ul class="list-disc list-inside">
                    <li>Deskripsi Pekerjaan 1</li>
                    <li>Deskripsi Pekerjaan 2</li>
                    <li>Deskripsi Pekerjaan 3</li>
                    <li>Deskripsi Pekerjaan 4</li>
                    <li>Deskripsi Pekerjaan 5</li>
                </ul>
                </div>

                <!-- Kanan -->
                <div>
                <p class="font-bold">Kirimkan lamaranmu melalui email kami:</p>
                <p class="mb-4">pt.tjtk@yahoo.com</p>

                <p class="font-bold">Subject Email:</p>
                <p class="mb-4">ENGINEERING</p>

                <p class="font-bold">Batas Waktu:</p>
                <p>12 September 2025 - 25 September 2025</p>
                </div>
            </div>
            </div>

            <!-- Lowongan ke-2 -->
            <div x-data="{ open: false }" class="mb-4 bg-white rounded-xl shadow">
            <button @click="open = !open"
                class="w-full flex justify-between items-center p-4 font-semibold">
                <div>
                <p>2. Operator Produksi</p>
                <span class="text-sm text-gray-500">Pendidikan SMA/SMK</span>
                </div>
                <span x-show="!open">▼</span>
                <span x-show="open">▲</span>
            </button>

            <div x-show="open" x-transition
                class="border-t p-4">
                <p>Detail lowongan operator produksi bisa diisi di sini...</p>
            </div>
            </div>
        </div>
    </section>

<!-- Tambahkan Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>

@endsection