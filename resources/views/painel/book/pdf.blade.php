@extends('painel.pdf.table')
@section('title', 'Relatório de Livros')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Autor</th>
            <th>Categoria</th>
        </tr>
        @foreach($books as $book)
            <tr>
                <th>{{ $book['id'] }}</th>
                <th>{{ $book['name'] }}</th>
                <th>{{ $book['author'] }}</th>
                <th>{{ $book['description'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
