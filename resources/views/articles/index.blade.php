@extends('layout')

@section('content')
    <div class="mt-12">
        @foreach($articles as $article)
            <div class="mt-12">
                <a href="{{ $article->url }}" class="no-underline text-black font-bold text-2xl ">
                    {{ $article->title }}
                </a>
            </div>
            <div class="mt-4 text-gray-900">
                {{ $article->excerpt }}
            </div>
            <div class="mt-4">
                <a href="{{ $article->url }}" class="text-gray-800 hover:text-black underline">
                    Read this article →
                </a>
            </div>
        @endforeach
    </div>
@endsection

