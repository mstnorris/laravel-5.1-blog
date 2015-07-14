@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-unlock"></i> All Roles</h1>

                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <div class="list-group">
                            @foreach ( $roles as $role )

                                <a href="/roles/#{{ $role->id }}" class="list-group-item">
                                    {{ $role->name }}
                                    @if ( $role->id == 1)
                                        <span class="pull-right"><i class="fa fa-fw fa-role-secret"></i></span>
                                    @endif
                                </a>

                            @endforeach

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-4">
                        <h2>Role Name</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection