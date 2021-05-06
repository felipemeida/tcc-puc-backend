@extends('painel.pdf.table')
@section('title', 'Relatório de Usuários')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <th>{{ $user['id'] }}</th>
                <th>{{ $user['name'] }}</th>
                <th>{{ $user['email'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
