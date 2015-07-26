<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    public function getBlogPosts()
    {
        $articles = Article::latest()->with('author')->paginate(5);

        return view('articles.all', compact('articles'));
    }

    public function getBlogPost($slug)
    {
        $article = Article::whereSlug($slug)->first();
        return view('articles.single', compact('article'));
    }

    public function getWriteArticle()
    {
        return view ('articles.create');
    }

    /**
     * Save a new article.
     *
     * @param ArticleRequest $request
     * @return Response
     */
    public function postSaveArticle(CreateArticleRequest $request)
    {
        auth()->user()->articles()->create($request->all());

        return redirect('blog');
    }
}
