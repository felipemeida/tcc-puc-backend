@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Livros</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Livros</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Nome</th>
                    <th>Autor</th>
                    <th>Categoria</th>
                    <th style="width: 210px">Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book['id'] }}</td>
                        <td>{{ $book['name'] }}</td>
                        <td>{{ $book['author'] }}</td>
                        <td>{{ $book['category_id']  }}</td>
                        <td class="d-flex">
                            <a class="mr-2" href="{{ route('book.edit', $book['id']) }}">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <form method="POST" action="{{ route('book.delete', $book['id']) }}">
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
