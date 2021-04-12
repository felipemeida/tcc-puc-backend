@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Páginas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Blocos do site</h3>
            <button class="btn btn-danger btn-xs float-right">Download PDF</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">Slug</th>
                    <th>Objetivo</th>
                    <th>Texto</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page['slug'] }}</td>
                        <td>{{ $page['objective']  }}</td>
                        <td>{{ $page['value'] }}</td>
                        <td><a href="{{ route('pages.edit', $page['id']) }}">
                                <button class="btn btn-warning">Editar</button>
                            </a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
{{--        <div class="card-footer clearfix">--}}
{{--            <ul class="pagination pagination-sm m-0 float-right">--}}
{{--                <li class="page-item"><a class="page-link" href="#">«</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                <li class="page-item"><a class="page-link" href="#">»</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
@stop

@section('css')
    <link href="{{ asset('css/library/toastr.min.css') }}" rel="stylesheet"/>
@stop

@section('js')
    <script src="{{ asset('js/library/library.js') }}"></script>
    <script>
        @isset($message)
            toastr["success"]("{{ $message }}")
        @endisset
    </script>
@stop
