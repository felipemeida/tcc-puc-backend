@extends('painel.pdf.table')
@section('title', 'Relatório de Produtos')

@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>QTD</th>
            <th>Preço</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <th>{{ $product['id'] }}</th>
                <th>{{ $product['name'] }}</th>
                <th>{{ $product['quantity'] }}</th>
                <th>{{ $product['price'] }}</th>
            </tr>
        @endforeach
    </table>
@endsection
