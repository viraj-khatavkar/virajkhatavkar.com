<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Cache::rememberForever('articles', function () {
            $articles = collect(Storage::disk('articles')->files());
            return $articles->map(function ($article) {
                $article = YamlFrontMatter::parse(Storage::disk('articles')->get($article));

                return (object)[
                    'id'      => $article->id,
                    'url'     => url(Str::slug($article->title)),
                    'title'   => $article->title,
                    'excerpt' => $article->excerpt,
                    'body'    => $article->body,
                ];
            })->sortByDesc('id');
        });

        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        try {
            $article = Cache::rememberForever($slug, function () use ($slug) {
                return YamlFrontMatter::parse(Storage::disk('articles')->get(sprintf('%s.md', $slug)));
            });

            return view('articles.show', [
                'article' => (object)[
                    'title' => $article->title,
                    'body'  => (new CommonMarkConverter())->convertToHtml($article->body()),
                ],
            ]);
        } catch (FileNotFoundException $e) {
            abort(404);
        }
    }
}