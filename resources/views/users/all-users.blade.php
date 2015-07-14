@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-users"></i> All Users</h1>

                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <div class="list-group">
                            @foreach ( $users as $user )

                            <a href="/users/#{{ $user->id }}" class="list-group-item">
                                {{ $user->name }}
                                @if ( $user->id == 1)
                                <span class="pull-right"><i class="fa fa-fw fa-user-secret"></i></span>
                                    @endif
                            </a>

                        @endforeach

                        </div>

                        {!! $users->render() !!}

                    </div>
                    <div class="col-md-6 col-sm-4">
                        <h2>User's Name</h2>
                    </div>
                </div>







            </div>
        </div>
    </div>
@endsection