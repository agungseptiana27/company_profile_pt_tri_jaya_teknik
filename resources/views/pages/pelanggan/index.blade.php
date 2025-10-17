@extends('layouts.app')

@section('title', 'Pelanggan |' . config('app.name'))

@section('content')
<section class="py-12">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Judul -->
        <h2 class="text-2xl md:text-3xl font-bold text-center text-[#0D3300] mb-8">
            Pelanggan PT Tri Jaya Teknik Karawang
        </h2>

        <!-- Tabel -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
            <table class="w-full border-collapse text-left">
                <thead>
                    <tr class="bg-gradient-to-b from-[#269900] to-[#0D3300] text-white">
                        <th class="px-4 py-3 w-16">No</th>
                        <th class="px-4 py-3">Logo</th>
                        <th class="px-4 py-3">Nama Perusahaan</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($customers as $index => $customer)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-4 py-3">{{ $index + 1 }}</td>
                        <td class="px-4 py-3">
                            @if($customer->logo)
                            <img src="{{ asset('storage/' . $customer->logo) }}" alt="{{ $customer->company_name }}"
                                class="w-16 h-16 object-cover cursor-pointer"
                                @click="open = true; imgSrc='{{ asset('storage/' . $customer->logo) }}'">
                            @endif
                        </td>

                        <td class="px-4 py-3 font-medium">{{ $customer->company_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Dropdown + Pagination -->
        @if ($customers instanceof \Illuminate\Pagination\LengthAwarePaginator)
        <div class="mt-4 flex flex-col md:flex-row items-center justify-between">
            <!-- Dropdown kiri -->
            <form method="GET" action="{{ route('pelanggan.index') }}" class="mb-2 md:mb-0">
                <label for="per_page" class="mr-2 font-medium">Tampilkan:</label>
                <select name="per_page" id="per_page" onchange="this.form.submit()" class="border rounded px-2 py-1">
                    <option value="5" {{ $perPage == 5 ? 'selected' : '' }}>5</option>
                    <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                    <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>All</option>
                </select>
            </form>

            <!-- Pagination kanan -->
            <div>
                {{ $customers->links() }}
            </div>
        </div>
        @endif
    </div>
</section>
@endsection