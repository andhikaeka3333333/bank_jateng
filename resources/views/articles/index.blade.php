@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-16">
    <div class="flex justify-between items-center mb-6 sm:mb-8">
        <div>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#18494C] leading-tight">Daftar Artikel</h1>
            <div class="w-16 sm:w-24 h-2 bg-[#45B7BE] mt-2"></div>
        </div>
        @auth
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('articles.create') }}" class="bg-indigo-600 text-white px-4 sm:px-5 py-2 rounded-lg hover:bg-indigo-700 transition text-sm sm:text-base">+ Tambah Artikel</a>
            @endif
        @endauth
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
      @foreach($articles as $article)
<div class="bg-white rounded-lg shadow-md overflow-hidden">
      <div class="w-full h-32 sm:h-40 lg:h-48 overflow-hidden flex items-center justify-center bg-gray-100">
                    <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-full object-cover" alt="Gambar {{ $article->title }}" />
                </div>

    <div class="px-4 sm:px-5 pb-4 sm:pb-5 flex flex-col justify-between min-h-[200px]">
        <div>
            <p class="text-xs sm:text-sm text-gray-600 mb-1">
                {{ $article->created_at->format('d/m/Y') }} | {{ $article->author }}
            </p>
            <h2 class="text-sm sm:text-base lg:text-lg font-bold text-gray-900 mb-1 leading-snug">
                {{ $article->title }}
            </h2>
            <p class="text-xs sm:text-sm text-gray-500 mb-3">
                {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 50, '....') }}
            </p>
            <a href="{{ route('articles.show', $article->id) }}" class="text-indigo-600 hover:underline font-semibold text-xs sm:text-sm">Baca Selengkapnya</a>
        </div>

        @auth
            @if(Auth::user()->role === 'admin')
            <div class="mt-3 flex justify-between items-center text-xs sm:text-sm">
                <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin hapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                </form>
            </div>
            @endif
        @endauth
    </div>
</div>
@endforeach

    </div>

    <div class="mt-8 sm:mt-10">
        {{ $articles->links() }}
    </div>
</div>
@endsection