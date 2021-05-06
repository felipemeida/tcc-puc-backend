@extends('painel.pdf.table')
@section('title', 'Relatório de categorias')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Cor</th>
            <th>Tipo</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <th>{{ $category['id'] }}</th>
                <th>{{ $category['name'] }}</th>
                <th>{{ $category['color'] }}</th>
                <th>{{ $category['type'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
