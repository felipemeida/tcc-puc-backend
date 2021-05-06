@extends('painel.pdf.table')
@section('title', 'Relatório de Posts')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Autor</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <th>{{ $post['id'] }}</th>
                <th>{{ $post['title'] }}</th>
                <th>{{ $post['user']['name'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
