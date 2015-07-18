@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-user"></i> {{ $user->name }}</h1>

                @foreach ( $user->articles as $article )

                    @include('articles.partials._individual')

                @endforeach

                <div class="row">
                    <div class="col-xs-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection