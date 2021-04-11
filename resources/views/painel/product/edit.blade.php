@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Categorias</h3>
        </div>
        <!-- /.card-header -->
        <form method="POST" action="{{ route('product.update', $product['id']) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('painel.product.form.form')
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
