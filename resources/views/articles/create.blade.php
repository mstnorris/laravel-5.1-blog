@extends('layouts.master')

@section('header-notincluded')
    <style>
        html, body, #editor {
            margin: 0;
            height: 100%;
        }

        textarea, #editor div {
            display: inline-block;
            height: 100%;
            vertical-align: top;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0 20px;
        }

        textarea {
            width: 100%;
            border: 1px solid #ccc;
            box-shadow: 0 1px 3px #999;
            resize: none;
            outline: none;
            background-color: #ffffff;
            font-size: 14px;
            padding: 20px;
        }

        code {
            color: #f66;
        }
    </style>
@endsection

@section('header')
    <style>
        textarea.markdown-editor {
            padding: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">
                <h1>Write</h1>
                <form action="/write" method="post" class="fuelux">
                    {!! csrf_field() !!}
                    <div class="form-group">
                    <label for="title">Title</label>
                    <input tabindex="0" required type="text" class="form-control" name="title" placeholder="Give it a Title...">

                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea tabindex="1" required autofocus="autofocus" name="body" class="form-control markdown-editor" data-provide="markdown" data-iconLibrary="fa" rows="10" placeholder="Give it a Body..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="published_at">Publish on</label>
                        <input tabindex="2" required type="date" name="published_at" class="form-control" value="{{ date('Y-m-d') }}">
                    </div>
                    <div class="form-group">

                            <button tabindex="3" type="submit" class="btn btn-primary">Publish</button>

                    </div>



                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-3">

            </div>
        </div>
    </div>
@endsection

@section('footer')
    {{--<script>--}}
        {{--$('#myDatepicker').datepicker();--}}
    {{--</script>--}}
@endsection
@section('footer-notincluded')
    <script>

        marked.setOptions({
            renderer: new marked.Renderer(),
            gfm: true,
            tables: true,
            breaks: false,
            pedantic: false,
            sanitize: true,
            smartLists: true,
            smartypants: false
        });

        new Vue({
            el: '#editor',
            data: {
                input: '# A long time ago in a galaxy far, far away....'
            },
            filters: {
                marked: marked
            }
        })
    </script>
@endsection