@extends('layouts.app')

@section('title', 'Sertifikasi Personal | ' . config('app.name'))

@section('content')
<section class="py-12" x-data="{
        open: false, 
        imgSrc: '', 
        search: '', 
        sort: 'asc', 
        keahlian: '', 
        items: {{ json_encode($sertifPersonal) }},
        get filteredItems() {
            let filtered = this.items;

            // filter berdasarkan pencarian
            if (this.search) {
                filtered = filtered.filter(i => 
                    i.nama_pekerja.toLowerCase().includes(this.search.toLowerCase()) ||
                    i.keahlian.toLowerCase().includes(this.search.toLowerCase())
                );
            }

            // filter berdasarkan keahlian
            if (this.keahlian) {
                filtered = filtered.filter(i => i.keahlian === this.keahlian);
            }

            // sorting abjad
            filtered = filtered.sort((a, b) => {
                return this.sort === 'asc' 
                    ? a.nama_pekerja.localeCompare(b.nama_pekerja)
                    : b.nama_pekerja.localeCompare(a.nama_pekerja);
            });

            return filtered;
        }
    }">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Sertifikasi Keahlian
        </h2>

        <!-- Filter & Search -->
        <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-3">
            <!-- Search -->
            <input type="text" placeholder="Cari nama atau keahlian..."
                class="w-full md:w-1/3 border px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:ring focus:ring-green-300"
                x-model="search">

            <div class="flex items-center gap-3">
                <!-- Sort -->
                <select x-model="sort" class="border px-3 py-2 rounded-lg shadow-sm">
                    <option value="asc">Nama (A-Z)</option>
                    <option value="desc">Nama (Z-A)</option>
                </select>

                <!-- Filter Keahlian -->
                <select x-model="keahlian" class="border px-3 py-2 rounded-lg shadow-sm">
                    <option value="">Semua Keahlian</option>
                    @foreach($sertifPersonal->pluck('keahlian')->unique() as $jab)
                    <option value="{{ $jab }}">{{ $jab }}</option>
                    @endforeach
                </select>
            </div>
        </div>

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
                    <template x-for="(personal, index) in filteredItems" :key="personal.id">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-4 py-3" x-text="index + 1"></td>

                            <td class="px-4 py-3 font-medium" x-text="personal.nama_pekerja"></td>
                            <td class="px-4 py-3" x-text="personal.keahlian"></td>
                            <!-- <td class="px-4 py-3">
                                <template x-if="personal.image">
                                    <img :src="'/storage/' + personal.image" :alt="personal.nama_pekerja"
                                        class="w-16 h-16 object-cover cursor-pointer"
                                        @click="open = true; imgSrc='/storage/' + personal.image">
                                </template>
                            </td> -->
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>

        <!-- Popup -->
        <div class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 p-4" x-show="open" x-transition
            style="display: none" @click.self="open = false">
            <div class="relative bg-white rounded-lg shadow-lg p-4">
                <button class="absolute -top-4 -right-4 text-gray-800 text-3xl font-bold"
                    @click="open = false">&times;</button>
                <img :src="imgSrc" alt="Sertifikat" class="max-w-md max-h-[60vh] w-auto h-auto object-contain">
            </div>
        </div>
    </div>
</section>
@endsection