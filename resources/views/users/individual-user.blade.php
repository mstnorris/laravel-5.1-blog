@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-user"></i> Individual User</h1>

                <p class="lead">{{ $user->name }}</p>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-users"></i> Users</h3>
                            </div>
                            <div class="panel-body">
                                There are a total of 53 users.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-shield"></i> Roles</h3>
                            </div>
                            <div class="panel-body">
                                There are a total of 3 roles.
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-unlock"></i> Permissions</h3>
                            </div>
                            <div class="panel-body">
                                There are a total of 11 permissions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection