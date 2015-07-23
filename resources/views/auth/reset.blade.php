@extends('layouts.master')

@section('content')

    <!-- resources/views/auth/reset.blade.php -->

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <label class="control-label">Email</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label class="control-label">New Password</label>
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
    <label class="control-label">New Password Confirm</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div class="form-group" class="btn btn-primary">
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>

@endsection