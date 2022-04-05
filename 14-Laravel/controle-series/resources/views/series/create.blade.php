@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')

    <form method="post">
        @csrf

        <div class="form-group">
            
            <label for="nome">
                Nome
            </label>

            <input type="text" class="form-control" name="nome">

        </div>

        <button class="btn-primary">
            Adicionar
        </button>

    </form>

@endsection