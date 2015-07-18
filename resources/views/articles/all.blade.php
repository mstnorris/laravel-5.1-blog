@extends('layouts.master')

@section('header')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1 class="text-center">All Articles</h1>

                @foreach ( $articles as $article )
                    @include('articles.partials._individual')
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