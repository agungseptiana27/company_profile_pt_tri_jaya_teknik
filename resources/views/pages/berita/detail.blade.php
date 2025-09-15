@extends('layouts.app')

@section('title', 'Detail Berita | ' .config('app.name'))

@section('content')
    <section class="py-10">
        <div class="max-w-4xl mx-auto px-4">
            <img src="{{ asset('images/img/berita4.png') }}" class="w-full rounded-xl mb-6" />

            <h1 class="text-2xl font-bold mb-2">Menggunakan Fasilitas Terbaru 2025</h1>
            <p class="text-sm text-gray-500 mb-6">03 September 2025 • Admin</p>

            <div class="prose max-w-none mb-10">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra libero quis justo fermentum, id iaculis mi ultrices. Etiam at lorem mauris. Nullam placerat lobortis tellus, ut ornare ligula sagittis eget. Nunc efficitur est mauris, vitae suscipit odio placerat ut. Sed fermentum, tortor vel laoreet pretium, lectus felis scelerisque purus, at iaculis sem ligula non est. Sed suscipit ante eu vestibulum venenatis. Duis quis sem quis enim varius cursus id sit amet tortor. Nullam sodales vitae risus non accumsan. Donec ultricies libero in leo fermentum vulputate. Nam in enim rhoncus, pellentesque felis in, semper nibh. Aliquam feugiat nunc ac libero interdum, et ultrices libero congue. Suspendisse mollis neque ut scelerisque viverra. Fusce sodales nec purus quis lobortis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra libero quis justo fermentum, id iaculis mi ultrices. Etiam at lorem mauris. Nullam placerat lobortis tellus, ut ornare ligula sagittis eget. Nunc efficitur est mauris, vitae suscipit odio placerat ut. Sed fermentum, tortor vel laoreet pretium, lectus felis scelerisque purus, at iaculis sem ligula non est. Sed suscipit ante eu vestibulum venenatis. Duis quis sem quis enim varius cursus id sit amet tortor. Nullam sodales vitae risus non accumsan. Donec ultricies libero in leo fermentum vulputate. Nam in enim rhoncus, pellentesque felis in, semper nibh. Aliquam feugiat nunc ac libero interdum, et ultrices libero congue. Suspendisse mollis neque ut scelerisque viverra. Fusce sodales nec purus quis lobortis.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris viverra libero quis justo fermentum, id iaculis mi ultrices. Etiam at lorem mauris. Nullam placerat lobortis tellus, ut ornare ligula sagittis eget. Nunc efficitur est mauris, vitae suscipit odio placerat ut. Sed fermentum, tortor vel laoreet pretium, lectus felis scelerisque purus, at iaculis sem ligula non est. Sed suscipit ante eu vestibulum venenatis. Duis quis sem quis enim varius cursus id sit amet tortor. Nullam sodales vitae risus non accumsan. Donec ultricies libero in leo fermentum vulputate. Nam in enim rhoncus, pellentesque felis in, semper nibh. Aliquam feugiat nunc ac libero interdum, et ultrices libero congue. Suspendisse mollis neque ut scelerisque viverra. Fusce sodales nec purus quis lobortis.</p>
            </div>

            <!-- Berita Lainnya -->
            <h3 class="font-bold text-lg mb-4">Berita Lainnya</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 justify-center">
                <a href="/berita/detail" class="block bg-white rounded-xl shadow overflow-hidden group max-w-[120px] mx-auto">
                    <img src="{{ asset('images/img/berita2.png') }}" class="w-[120px] h-[120px] object-cover group-hover:scale-105 transition" />
                    <div class="p-2 text-center">
                        <p class="text-xs text-gray-500">02 Sep 2025</p>
                        <h4 class="font-bold text-xs">Persiapan Revolusi Industri 4.0</h4>
                    </div>
                </a>

                <a href="/berita/detail" class="block bg-white rounded-xl shadow overflow-hidden group max-w-[120px] mx-auto">
                    <img src="{{ asset('images/img/berita3.png') }}" class="w-[120px] h-[120px] object-cover group-hover:scale-105 transition" />
                    <div class="p-2 text-center">
                        <p class="text-xs text-gray-500">01 Sep 2025</p>
                        <h4 class="font-bold text-xs">Pameran Industri Jepang</h4>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection