@extends('layouts.app')

@section('title', 'Sejarah Perusahaan | ' . config('app.name'))

@section('content')

<section class="bg-white py-16">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">

    <!-- Judul -->
    <h2 class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-8">
      Sejarah PT Tri Jaya Teknik Karawang
    </h2>

    <!-- Deskripsi -->
    <div class="text-gray-700 leading-relaxed space-y-4 mb-12 text-justify">
      {!! nl2br(e($profile->history)) !!}
    </div>

    <!-- Foto Direktur -->
    <div class="flex flex-col items-center mb-16">
      <img src="{{ asset('storage/' . $profile->director_photo) }}" alt="Direktur Utama"
        class="w-40 h-52 object-cover rounded-lg shadow-md mb-4">
      <h3 class="text-lg font-semibold">{{ $profile->director_name }}</h3>
      <p class="text-gray-600">{{ $profile->director_position }}</p>
    </div>

    <!-- Visi dan Misi sejajar -->
    <div class="grid md:grid-cols-2 gap-8 text-center md:text-left mb-8">
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-2">Visi</h4>
        <ul class="text-gray-600 space-y-2 list-disc list-inside">
          @foreach($profile->vision ?? [] as $visi)
            <li>{{ $visi['text'] }}</li>
          @endforeach
        </ul>
      </div>
      <div>
        <h4 class="text-lg font-bold text-gray-800 mb-2">Misi</h4>
        <ul class="text-gray-600 space-y-2 list-disc list-inside">
          @foreach($profile->mission ?? [] as $misi)
            <li>{{ $misi['text'] }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <!-- Kebijakan Mutu -->
    <div class="text-center">
      <h4 class="text-lg font-bold text-gray-800 mb-2">Kebijakan Mutu</h4>
      <ul class="text-gray-600 space-y-2 list-disc list-inside inline-block text-left">
        @foreach($profile->policy ?? [] as $policy)
          <li>{{ $policy['text'] }}</li>
        @endforeach
      </ul>
    </div>



  </div>
</section>


@endsection