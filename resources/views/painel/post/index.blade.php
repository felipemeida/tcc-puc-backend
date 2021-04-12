@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Postagens</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Postagens</h3>
            <button class="btn btn-danger btn-xs float-right">Download PDF</button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th style="width: 210px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post['title']  }}</td>
                        <td>{{ $post->user['name'] }}</td>
                        <td class="d-flex">
                            <a class="mr-2" href="{{ route('post.edit', $post['id']) }}">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <form method="POST" action="{{ route('post.delete', $post['id']) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
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
