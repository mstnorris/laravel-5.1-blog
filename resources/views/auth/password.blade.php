@extends('layouts.master')

@section('content')

    <!-- resources/views/auth/password.blade.php -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

        <h1>Reset Password</h1>
                
                <form method="POST" action="/password/email">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Send Password Reset Link
                        </button>
                    </div>
                </form>

        </div>
    </div>
</div>

@endsection