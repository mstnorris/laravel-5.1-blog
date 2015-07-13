@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-unlock"></i> My Permissions</h1>

                <p class="lead">Welcome {{ auth()->user()->name }}</p>

                @foreach ( $user->roles as $role )

                    @foreach ( $role->permissions as $permission )

                        <p>{{ $permission->name }}</p>

                    @endforeach

                @endforeach

            </div>
        </div>
    </div>
@endsection