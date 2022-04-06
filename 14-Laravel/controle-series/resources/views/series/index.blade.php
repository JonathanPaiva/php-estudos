@extends('layout')

@section('cabecalho')
    Séries
@endsection

@section('conteudo')

    <a href="/series/criar" class="btn btn-dark mb-1">
        Adicionar
    </a>

    <ul class="list-group">
        @foreach($series as $serie)
        <li class="list-group-item acitve">{{ $serie->nome }}</li>
        @endforeach
    </ul>

@endsection