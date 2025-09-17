@extends('layouts.app')

@section('title', 'Karir | ' . config('app.name'))

@section('content')
<section id="lowongan" class="py-10">
    <div class="max-w-4xl mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-6">Lowongan Pekerjaan</h2>

        @forelse ($karir as $index => $job)
        <div x-data="{ open: false }" class="mb-4 bg-white rounded-xl shadow">
            <!-- Header -->
            <button @click="open = !open" class="w-full flex justify-between items-center p-4 font-semibold">
                <div>
                    <p>{{ $index + 1 }}. {{ $job->title }}</p>
                    <span class="text-sm text-gray-500">Pendidikan {{ $job->education }}</span>
                </div>
                <span x-show="!open">▼</span>
                <span x-show="open">▲</span>
            </button>

            <!-- Content -->
            <div x-show="open" x-transition class="border-t p-4 grid md:grid-cols-2 gap-6 text-sm">

                <!-- Kiri -->
                <div>
                    <h4 class="font-bold">Persyaratan:</h4>
                    <ul class="list-disc list-inside mb-4">
                        @foreach ($job->requirements ?? [] as $req)
                        <li>{{ $req['item'] }}</li>
                        @endforeach
                    </ul>

                    <h4 class="font-bold">Deskripsi Pekerjaan:</h4>
                    <ul class="list-disc list-inside">
                        @foreach ($job->descriptions ?? [] as $desc)
                        <li>{{ $desc['item'] }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Kanan -->
                <div>
                    <p class="font-bold">Kirimkan lamaranmu melalui email kami:</p>
                    <p class="mb-4">{{ $job->email }}</p>

                    <p class="font-bold">Subject Email:</p>
                    <p class="mb-4">{{ $job->subject ?? strtoupper($job->title) }}</p>

                    <p class="font-bold">Batas Waktu:</p>
                    <p>
                        {{ $job->start_date?->format('d M Y') }}
                        -
                        {{ $job->end_date?->format('d M Y') }}
                    </p>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center text-gray-500">Belum ada lowongan tersedia.</p>
        @endforelse
    </div>
</section>

<!-- Tambahkan Alpine.js -->
<script src="//unpkg.com/alpinejs" defer></script>
@endsection