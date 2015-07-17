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
                    @if ( auth()->check() )
                        <a class="navbar-brand" href="/blog">Blog</a>
                    @else
                        <a class="navbar-brand" href="/">Blog</a>
                    @endif
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        @if ( auth()->check() )

                            <li class="{{ set_active('dashboard') }}"><a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
                            <li class="{{ set_active('articles/write') }}"><a href="/write"><i class="fa fa-fw fa-pencil-square-o"></i> New Article</a></li>

                        @endif
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if ( auth()->check() )
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a></li>
                                    <li><a href="/my-articles"><i class="fa fa-fw fa-newspaper-o"></i> My Articles</a></li>
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
