@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<div class="max-w-7xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Berita</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @foreach($articles as $article)
        <a href="{{ route('news.show', $article) }}" class="block bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">
            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-48 object-cover">
            @endif
            <div class="p-4">
                <h2 class="text-xl font-semibold">{{ $article->title }}</h2>
                <p class="text-sm text-gray-600">by {{ $article->author }}</p>
            </div>
        </a>
        @endforeach
    </div>

    <div class="mt-6">
        {{ $articles->links('vendor.pagination.tailwind') }}
    </div>
</div>
@endsection
