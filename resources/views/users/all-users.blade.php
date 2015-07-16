@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-users"></i> All Users</h1>

                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email address</th>
                                    <th>Roles</th>
                                    <th>Permissions</th>
                                    <th>Controls</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $users as $user )

                                    <tr>
                                        <td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles()->count() }}</td>
                                        <td>{{ $user->roles()->first()->permissions()->count() }}</td>
                                        <td><i class="fa fa-fw fa-pencil"></i> <i class="fa fa-fw fa-trash"></i></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">Showing {{ $users->firstItem() }}-{{ $users->lastItem() }} of {{ $users->total() }} {{-- str_plural('user', $users->total()) --}} <span class="pull-right">Page {{ $users->currentPage() }} of {{ $users->lastPage() }}</span></div>
                </div>

                {{--@foreach ( $users as $user )--}}

                    {{--<a href="/users/#{{ $user->id }}" class="list-group-item">--}}
                        {{--{{ $user->name }}--}}
                        {{--@if ( $user->id == 1)--}}
                            {{--<span class="pull-right"><i class="fa fa-fw fa-user-secret"></i></span>--}}
                        {{--@endif--}}
                    {{--</a>--}}

                {{--@endforeach--}}



                {!! $users->render() !!}


            </div>
        </div>
    </div>
@endsection