@extends('layouts.app')

@section('title', 'Sertifikasi Personal | ' . config('app.name'))

@section('content')
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Sertifikasi Keahlian
        </h2>

        <!-- Filter & Search -->
        <form method="GET" action="{{ route('profil.personal') }}"
            class="flex flex-col md:flex-row justify-between items-center mb-6 gap-3">
            <!-- Search -->
            <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama atau keahlian..."
                class="w-full md:w-1/3 border px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-green-300">

            <div class="flex items-center gap-3">
                <!-- Sort -->
                <select name="sort" class="border px-3 py-2 rounded-lg shadow-sm" onchange="this.form.submit()">
                    <option value="asc" {{ $sort == 'asc' ? 'selected' : '' }}>Nama (A-Z)</option>
                    <option value="desc" {{ $sort == 'desc' ? 'selected' : '' }}>Nama (Z-A)</option>
                </select>

                <!-- Filter Keahlian -->
                <select name="keahlian" class="border px-3 py-2 rounded-lg shadow-sm" onchange="this.form.submit()">
                    <option value="">Semua Keahlian</option>
                    @foreach($listKeahlian as $jab)
                    <option value="{{ $jab }}" {{ $keahlian == $jab ? 'selected' : '' }}>{{ $jab }}</option>
                    @endforeach
                </select>

                <!-- Show Entries -->
                <select name="per_page" class="border px-3 py-2 rounded-lg shadow-sm" onchange="this.form.submit()">
                    <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                    <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>All</option>
                </select>

                <!-- Tombol submit -->
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg shadow">Filter</button>
            </div>
        </form>

        <!-- Tabel -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-gradient-to-b from-[#269900] to-[#0D3300] text-white">
                        <th class="px-4 py-3 w-16">No</th>
                        <th class="px-4 py-3">Nama Pekerja</th>
                        <th class="px-4 py-3">Keahlian</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($sertifPersonal as $index => $personal)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3">
                            {{ $loop->iteration + ($sertifPersonal instanceof \Illuminate\Pagination\LengthAwarePaginator ? ($sertifPersonal->currentPage() - 1) * $sertifPersonal->perPage() : 0) }}
                        </td>
                        <td class="px-4 py-3 font-medium">{{ $personal->nama_pekerja }}</td>
                        <td class="px-4 py-3">{{ $personal->keahlian }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center py-4">Data tidak ditemukan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if ($sertifPersonal instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="mt-4 flex justify-center">
            {{ $sertifPersonal->links() }}
        </div>
        @endif
    </div>
</section>
@endsection