@extends('article')

@section('content')
    <div class="mt-12">
        <div class="py-4 font-bold text-4xl">
            {{ $article->title }}
        </div>
        <div class="pt-4 markdown text-black leading-relaxed font-fira-mono">
            {!! $article->body !!}
        </div>
        <div class="my-8 leading-loose">
            <p class="pt-4">
                Have friends or colleagues who'd be interested in Personal Finance insights?
                <a href="http://virajkhatavkar.com/subscribe" class="underline outline-none hover:underline">
                    Send them here.
                </a>
            </p>
            <p class="pt-4">
                I’m on Twitter,
                <a href="https://twitter.com/virajkhatavkar" target="_blank"
                   class="underline outline-none hover:underline">
                    @virajkhatavkar
                </a>
            </p>
            <p class="pt-4">
                If you have feedback, feel free to write me at viraj@virajkhatavkar.com. I guarantee I'll read it,
                and likely will respond.
            </p>
        </div>
        <div class="flex justify-center mb-12">
            @include('subscribe')
        </div>
    </div>
@endsection

