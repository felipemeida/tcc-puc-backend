@extends('painel.pdf.table')
@section('title', 'Relatório de visualizações')

@section('content')
    <table>
        <tr>
            <th>Link</th>
            <th>View</th>
        </tr>
        @foreach($views as $view)
            <tr>
                <th>{{ $view['link'] }}</th>
                <th>{{ $view['views'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
