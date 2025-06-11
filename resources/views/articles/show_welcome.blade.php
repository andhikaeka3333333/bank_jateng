@extends('welcome_layout.app')

@section('content')
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $article->title }}</title>

        {{-- Import Tailwind --}}
        @vite('resources/css/app.css') {{-- atau mix() jika pakai Laravel Mix --}}
    </head>

    <body class="bg-gray-50 text-sm md:text-base">

        <div class="w-full min-h-screen py-8 px-4 md:px-8">
            <div class="bg-white p-6 md:p-8 rounded-xl shadow-md mx-auto w-full max-w-4xl">
                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="w-full h-128 object-cover rounded mb-4" />
                @endif
                <h1 class="text-2xl font-bold mb-3">{{ $article->title }}</h1>
                <p class="text-xs text-gray-600 mb-4">
                    Oleh {{ $article->author }} | {{ $article->created_at->format('d M Y') }}
                </p>
                <div class="text-gray-800 leading-relaxed text-sm md:text-base">
                    {!! nl2br(e($article->content)) !!}
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
