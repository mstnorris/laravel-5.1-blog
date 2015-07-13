@extends('layouts.simple')

@section('header')

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 300;
            color: #607d8b;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .spacer {
            margin: 0 1em; 0;
        }

        .title {
            font-size: 24px;
            margin: 0 0 0.5em;
        }

        @media ( min-width: 640px ) {
            .title {
                font-size: 36px;
                margin: 0 0 1em;
            }
        }

        @media ( min-width: 768px ) {
            .title {
                font-size: 48px;
                margin: 0 0 1.5em;
            }

            .btn-responsive {
                padding: 0.5em 1.5em;
                font-size: 1.2em;
                line-height: 1.2em;
            }
        }

        @media ( min-width: 992px ) {
            .title {
                font-size: 72px;
                margin: 0 0 2em;
            }

            .btn-responsive {
                padding: 0.5em 1.5em;
                font-size: 1.5em;
                line-height: 1.5em;
            }
        }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="content">
            <div class="title">User Management System</div>
            <a href="/register" class="btn btn-primary btn-responsive">Sign up</a> <span class="spacer">or</span> <a href="/login" class="btn btn-primary btn-responsive">Sign in</a>
        </div>
    </div>

@endsection
