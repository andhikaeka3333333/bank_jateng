@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<div class="max-w-3xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Artikel</h1>

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" enctype="multipart/form-data" action="{{ route('articles.update', $article->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block font-medium">Judul</label>
            <input type="text" name="title" class="w-full border rounded p-2" value="{{ old('title', $article->title) }}">
        </div>

        <div class="mb-4">
            <label class="block font-medium">Author</label>
            <input type="text" name="author" class="w-full border rounded p-2" value="{{ old('author', $article->author) }}">
        </div>

        <div class="mb-4">
            <label class="block font-medium">Paragraf</label>
            <textarea name="content" rows="6" class="w-full border rounded p-2">{{ old('content', $article->content) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Gambar</label>
            <input type="file" name="image" class="w-full">
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Perbarui Artikel
        </button>
    </form>
</div>
@endsection
