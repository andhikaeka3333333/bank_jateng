@extends('welcome_layout.app')

@section('content')
<!-- Section: Tentang Kami -->
<section class="w-full flex justify-center px-4 py-20 ">
  <div class="w-full max-w-5xl bg-white shadow-xl rounded-2xl p-8 mb-16 text-center">
    <h2 class="text-4xl font-bold text-gray-800 mb-10 border-b-4 border-teal-500 inline-block pb-2">
      Tentang Kami
    </h2>
    <div class="flex flex-wrap justify-center gap-12">
      @php
        $teams = [
          ['name' => 'Andhika Eka', 'img' => '/images/dhika.png'],
          ['name' => 'Yusuf Rizqy Mubarok', 'img' => '/images/yusuf.png'],
          ['name' => 'Wisnu Ibrahima', 'img' => '/images/wisnu.png'],
        ];
      @endphp

      @foreach ($teams as $member)
      <div class="flex flex-col items-center transition-transform hover:scale-105">
        <div class="bg-gradient-to-tr from-teal-400 to-teal-600 p-1 rounded-full shadow-lg">
          <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="rounded-full w-28 h-28 object-cover border-4 border-white shadow-inner">
        </div>
        <span class="mt-4 text-base font-semibold text-gray-800 bg-black text-white px-4 py-1 rounded-full">
          {{ $member['name'] }}
        </span>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Section: Apa Kata Developer -->
<section class="w-full flex justify-center px-4 pb-20">
  <div class="w-full max-w-5xl bg-white shadow-xl rounded-2xl p-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-10 text-center border-b-4 border-teal-500 inline-block pb-2">
      Apa Kata Developer
    </h2>

    @php
      $developers = [
        [
          'name' => 'Andhika Eka',
          'role' => 'Leader & FullStack Engineer',
          'desc' => 'Sebagai Lead Programmer, saya berkomitmen menghadirkan inovasi nyata yang berdampak langsung bagi masyarakat dan Bank Jateng Syariah.',
          'img' => '/images/dhika.png',
        ],
        [
          'name' => 'Yusuf Rizqy Mubarok',
          'role' => 'Backend Developer',
          'desc' => 'Saya bertanggung jawab penuh atas kenyamanan dan keamanan sistem backend web E-Branch ini untuk seluruh pengguna.',
          'img' => '/images/yusuf.png',
        ],
        [
          'name' => 'Wisnu Ibrahima',
          'role' => 'Frontend Developer',
          'desc' => 'Saya memastikan tampilan web yang informatif, modern, dan nyaman digunakan oleh semua pengguna.',
          'img' => '/images/wisnu.png',
        ],
      ];
    @endphp

    <div class="space-y-8">
      @foreach ($developers as $dev)
      <div class="flex flex-col md:flex-row items-center md:items-start gap-6 p-6 rounded-lg hover:bg-gray-50 transition-all duration-300">
        <img src="{{ $dev['img'] }}" class="rounded-full w-20 h-20 object-cover shadow-md border-2 border-teal-500" alt="{{ $dev['name'] }}">
        <div class="text-center md:text-left max-w-xl">
          <h3 class="text-sm text-teal-600 font-bold uppercase tracking-wide">{{ $dev['role'] }}</h3>
          <p class="mt-2 text-gray-700 text-base leading-relaxed">{{ $dev['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
