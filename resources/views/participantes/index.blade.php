@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <painel titulo="Lista de participantes">
                <tabela-lista 
                v-bind:titulos="['#', 'titulo', 'descrição']"
                v-bind:itens="[[1, 'PHP 00', 'Curso de PHP 00'], [2, 'PfP 01', 'Curso de PfP 01']]"
                ordem="asc" ordemcol="0"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="649884984"
                ></tabela-lista>
            </painel>
        </div>
    </div>
</div>
@endsection