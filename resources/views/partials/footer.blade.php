<footer class="bg-gradient-to-t from-[#D9FFCC] to-white border-t border-gray-300 mt-10 py-6">
    <div class="container mx-auto px-4 pt-10">
        <div class="grid md:grid-cols-3 gap-8 text-center md:text-left">

            <!-- Kolom Profil Desa dengan Logo -->
            <div class="flex items-start gap-4">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Logo PT"
                        class="w-20 h-20 rounded-lg bg-white p-1">
                </div>

                <!-- Teks Profil -->
                <div>
                    <h5 class="font-bold mb-2 text-[#0D3300]">PT Tri Jaya Teknik Karawang</h5>
                    <p class="text-gray-700 mb-4">
                        Jalan Alternatif Jl. Krajan II, <span>Warungbambu, Karawang Timur,</span>
                        <span>Karawang, West Java 41371</span>
                    </p>
                </div>
            </div>

            <!-- Kolom Tautan Cepat -->
            <div class="text-left md:justify-self-end">
                <h5 class="font-bold mb-6 text-[#0D3300]">Tautan Cepat</h5>
                <ul class="space-y-3">
                    <li><a href="{{ route('profil.sejarah') }}"
                            class="text-gray-700 hover:text-black transition duration-300">Sejarah</a></li>
                    <li><a href="{{ route('produk.fabrication') }}"
                            class="text-gray-700 hover:text-black transition duration-300">Produk</a></li>
                    <li><a href="{{ route('karir.index') }}"
                            class="text-gray-700 hover:text-black transition duration-300">Karir</a></li>
                    <li><a href="{{ route('berita.index') }}"
                            class="text-gray-700 hover:text-black transition duration-300">Berita</a></li>
                </ul>
            </div>

            <!-- Kolom Kontak -->
            <div class="text-left md:justify-self-end">
                <h5 class="font-bold mb-6 text-[#0D3300]">Kontak</h5>
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <img src="{{ asset('images/icons/sms.svg') }}" alt="email" class="mr-2 w-5 h-5">
                        <span class="text-black">pt.tjtk@yahoo.com</span>
                    </li>
                    <li class="flex items-center">
                        <img src="{{ asset('images/icons/call.svg') }}" alt="phone" class="mr-2 w-5 h-5">
                        <span class="text-black">+62 267 8615387</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Garis Pemisah -->
        <div class="border-t border-gray-300 mt-10">
            <div class="flex justify-center items-center py-4">
                <p class="text-[#0D3300] font-bold text-center">
                    &copy; Copyright by PT Tri Jaya Teknik Karawang.
                </p>
            </div>
        </div>
    </div>
</footer>