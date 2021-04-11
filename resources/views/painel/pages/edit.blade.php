@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Páginas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Bloco |{{ $page['slug'] }}|</h3>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('pages.update', $page['id']) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="objective">Objetivo</label>
                    <input type="text" class="form-control" id="objective" name="objective"
                           placeholder="Insira o Objetivo" value="{{ $page['objective'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <input type="text" class="form-control" id="content" name="value"
                           placeholder="Digite o conteúdo da página" value="{{ $page['value'] }}">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Editar</button>
            </div>
        </form>
    </div>
@endsection

@section('css')
    <link href="{{ asset('css/library/toastr.min.css') }}" rel="stylesheet"/>
@stop

@section('js')
    <script src="{{ asset('js/library/library.js') }}"></script>
    <script>
        @foreach ($errors->all() as $error)
            toastr["error"]("{{ $error }}")
        @endforeach
    </script>
@stop
