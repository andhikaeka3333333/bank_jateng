@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
<div class="max-w-6xl mx-auto py-10 px-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Daftar Artikel</h1>
        @auth
            @if(Auth::user()->role === 'admin')
                <a href="{{ route('articles.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">+ Tambah Artikel</a>
            @endif
        @endauth
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($articles as $article)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-[200px] object-cover" />
            @endif
            <div class="p-5">
                <p class="text-sm text-gray-600 mb-1">
                    {{ $article->created_at->format('d/m/Y') }}  |  {{ $article->author }}
                </p>
                <h2 class="text-lg font-bold text-gray-900 mb-1 leading-tight">{{ $article->title }}</h2>
                <p class="text-sm text-gray-500 mb-3">
                    {{ \Illuminate\Support\Str::limit(strip_tags($article->content), 50, '....') }}
                </p>
                <a href="{{ route('articles.show', $article->id) }}" class="text-indigo-600 hover:underline font-semibold text-sm">Baca Selengkapnya</a>

                @auth
                    @if(Auth::user()->role === 'admin')
                    <div class="mt-3">
                        <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-600 hover:underline text-sm">Edit</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline ml-2" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                        </form>
                    </div>
                    @endif
                @endauth
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $articles->links() }}
    </div>
</div>
@endsection
