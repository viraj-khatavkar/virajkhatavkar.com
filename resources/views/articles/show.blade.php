@extends('layout')

@section('content')
    <div class="mt-12">
        <div class="py-4 font-bold text-4xl">
            {{ $article->title }}
        </div>
        <div class="pt-4 markdown text-black leading-relaxed font-fira-mono">
            {!! $article->body !!}
        </div>
        <div class="py-4">
            You can email me at viraj@virajkhatavkar.com for any questions. I'll be happy to answer any of them!
        </div>
        <div class="pt-4 pb-8">
            - Viraj,
            <a href="https://twitter.com/virajkhatavkar" target="_blank" class="no-underline outline-none hover:underline">
                @virajkhatavkar
            </a>
        </div>
    </div>
@endsection

