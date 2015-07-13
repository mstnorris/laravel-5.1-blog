@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-user-plus"></i> Add User</h1>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form role="form" method="POST" action="{{ url('/register') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email" class="control-label">E-Mail Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation" class="control-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <div class="form-group">
                        <label for="roles" class="control-label">Roles</label>
                        <select name="roles" id="roles" multiple="multiple" class="form-control">
                            @foreach ( $roles as $roleId => $roleName )
                                <option value="{{ $roleId }}">{{ $roleName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script type="text/javascript">
        $('select').select2();
    </script>
@endsection