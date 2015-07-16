@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-dashboard"></i> Dashboard</h1>

                <p class="lead">General information about all users, roles, and permissions.</p>

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

                <h1><i class="fa fa-fw fa-user"></i> Your Profile</h1>

                <p class="lead">Welcome {{ auth()->user()->name }}, here you will find details about your roles and permissions.</p>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-user"></i> User's Details</h3>
                            </div>
                            <div class="panel-body">
                                <p>{{ auth()->user()->name }}</p>
                                <p>{{ auth()->user()->email }}</p>
                                <hr>
                                <p>Member since {{ auth()->user()->created_at->format('D j M Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-shield"></i> User's Roles</h3>
                            </div>
                            <div class="panel-body">
                                <p>You have {{ auth()->user()->roles()->count() }} {{ str_plural('Role', auth()->user()->roles()->count()) }}.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-unlock"></i> User's Permissions</h3>
                            </div>
                            <div class="panel-body">
                                {{ auth()->user()->permissions() ? auth()->user()->permissions()->count() : "You don't have any permissions yet." }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection