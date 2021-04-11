@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Produtos</h3>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
            @csrf
            @include('painel.product.form.form')
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Cadastrar</button>
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
