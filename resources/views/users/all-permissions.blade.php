@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-unlock"></i> All Permissions</h1>

                <div class="row">
                    <div class="col-md-6 col-sm-4">
                        <div class="list-group">
                            @foreach ( $permissions as $permission )

                                <a href="/permissions/#{{ $permission->id }}" class="list-group-item">
                                    {{ $permission->name }}
                                    @if ( $permission->id == 1)
                                        <span class="pull-right"><i class="fa fa-fw fa-permission-secret"></i></span>
                                    @endif
                                </a>

                            @endforeach

                        </div>

                    </div>
                    <div class="col-md-6 col-sm-4">
                        <h2>Permission Name</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection