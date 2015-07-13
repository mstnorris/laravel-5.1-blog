@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-shield"></i> My Roles</h1>

                <p class="lead">Welcome {{ auth()->user()->name }}</p>

                @foreach ( $user->roles as $role )

                    <p>{{ $role->name }}</p>

                @endforeach

            </div>
        </div>
    </div>
@endsection