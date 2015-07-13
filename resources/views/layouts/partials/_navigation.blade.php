<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">UMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ set_active('dashboard') }}"><a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard<span class="sr-only">(current)</span></a></li>
                        @if ( auth()->check() && auth()->user()->isAdmin() )
                        <li class="{{ set_active('users/add') }}"><a href="/users/add"><i class="fa fa-fw fa-user-plus"></i> Add User</a></li>
                        <li class="{{ set_active('users') }}"><a href="/users"><i class="fa fa-fw fa-users"></i> All Users</a></li>
                        <li class="{{ set_active('users/roles') }}"><a href="/users/roles"><i class="fa fa-fw fa-shield"></i> All Roles</a></li>
                        <li class="{{ set_active('users/permissions') }}"><a href="/users/permissions"><i class="fa fa-fw fa-unlock"></i> All Permissions</a></li>
                        @else
                        <li class="{{ set_active('roles') }}"><a href="/roles"><i class="fa fa-fw fa-shield"></i> My Roles</a></li>
                        <li class="{{ set_active('permissions') }}"><a href="/permissions"><i class="fa fa-fw fa-unlock"></i> My Permissions</a></li>
                        @endif
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"--}}
                               {{--aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<li><a href="#">Action</a></li>--}}
                                {{--<li><a href="#">Another action</a></li>--}}
                                {{--<li><a href="#">Something else here</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li><a href="#">Separated link</a></li>--}}
                                {{--<li role="separator" class="divider"></li>--}}
                                {{--<li><a href="#">One more separated link</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if ( auth()->check() )
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
                                    <li><a href="/roles"><i class="fa fa-fw fa-shield"></i> My Roles</a></li>
                                    <li><a href="/permissions"><i class="fa fa-fw fa-unlock"></i> My Permissions</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/logout"><i class="fa fa-fw fa-sign-out"></i> Sign out</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/register"><i class="fa fa-fw fa-pencil-square-o"></i> Sign up</a></li>
                            <li><a href="/login"><i class="fa fa-fw fa-sign-in"></i> Sign in</a></li>
                        @endif


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>