@extends('layouts.master')

@section('header')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                @include('articles.partials._individual')

                
            </div>
        </div>
    </div>
@endsection