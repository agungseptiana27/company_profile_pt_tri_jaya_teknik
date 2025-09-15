@extends('layouts.app')

@section('title', 'Pelanggan |' .config('app.name'))

@section('content')
    <section class="py-12">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Judul -->
            <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Pelanggan PT Tri Jaya Teknik Karawang
            </h2>

            <!-- Tabel -->
            <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="w-full border-collapse">
                <thead>
                <tr class="bg-gradient-to-b from-[#269900] to-[#0D3300] text-white text-left">
                    <th class="px-4 py-3 w-16">No</th>
                    <th class="px-4 py-3">Nama Perusahaan</th>
                    <th class="px-4 py-3">Main Product</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                <tr>
                    <td class="px-4 py-3">1</td>
                    <td class="px-4 py-3">PT ACHIKIKI AUTO PART INDONESIA</td>
                    <td class="px-4 py-3">TRANSMISION GEAR 4R & 2R1</td>
                </tr>
                <tr>
                    <td class="px-4 py-3">2</td>
                    <td class="px-4 py-3">PT BERDIKARI METAL & ENGINEERING</td>
                    <td class="px-4 py-3">MOTOR CYCLE PART</td>
                </tr>
                <tr>
                    <td class="px-4 py-3">3</td>
                    <td class="px-4 py-3">PT FUTABA INDUSTRIAL INDONESIA</td>
                    <td class="px-4 py-3">SUSPENSION PART</td>
                </tr>
                <tr>
                    <td class="px-4 py-3">4</td>
                    <td class="px-4 py-3">PT G-TIM</td>
                    <td class="px-4 py-3">BODY PART 4R</td>
                </tr>
                <tr>
                    <td class="px-4 py-3">5</td>
                    <td class="px-4 py-3">PT KANETA INDONESIA</td>
                    <td class="px-4 py-3">TRANSMISION PART</td>
                </tr>
                <!-- Tambahkan baris lain sesuai kebutuhan -->
                </tbody>
            </table>
            </div>
        </div>
    </section>

@endsection