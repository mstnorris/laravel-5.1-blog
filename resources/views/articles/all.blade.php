@extends('layouts.master')

@section('header')
    <style>
        article.paper {
            background: white;
            margin: 3em 0 5em;
            padding: 3em;
            box-shadow: 0 1px 3px #999;
        }

        article.paper h2 {
            text-align: center;
            padding: 0 0 2em 0;
        }

        article.paper h2:after{
            content: "";
            border-bottom-style: solid;
            border-bottom-width:2px;
            display:block;
            width: 160px;
            margin: 1em auto;
        }

        article.paper p.lead::first-letter {
            font-size: 2em;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1 class="text-center">All Articles</h1>

                @foreach ( $articles as $article )
                    <article class="paper">
                    <div class="row">
                        <div class="col-xs-12">


                                <h2>{{ $article->title }}</h2>

                                @include('articles.partials._article-body')

                                <p>Published {{ $article->published_at->diffForHumans() }} by {{ $article->author->name }}</p>


                        </div>
                    </div>
                    </article>
                @endforeach

                <div class="row">
                    <div class="col-xs-12">
                        {!! $articles->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection