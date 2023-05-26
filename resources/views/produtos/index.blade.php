@extends('includes.base')

@section('title', 'produtos')

@section('content')
    <p>Produtos Funcionando</p>
    <a href="{{ route('produtos.add')}}">Adicionar Produto</a>
@endsection
