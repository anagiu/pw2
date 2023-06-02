@extends('includes.base')

@section('title', 'produtos')

@section('content')
    <table border="1" style="border-color: rgb(241, 149, 203)">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        @foreach ($prods as $prod)

        <tr>
            <td><a href="{{ route('produtos.view', $prod->id)}}">{{$prod->name}}</a></td>
            <td> R$ {{ number_format($prod->price, 2, ',', '.') }}</td>
            <td>{{$prod->quantity}}</td>
        </tr>
        @endforeach

    </table>

    <a href="{{ route('produtos.add')}}">Adicionar Produto</a>
@endsection
