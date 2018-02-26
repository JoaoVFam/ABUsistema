@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <painel v-bind:lista="{{$listaMigalhas}}">
                <tabela-lista 
                v-bind:titulos="['#', 'nome', 'telefone']"
                v-bind:itens="{{$listaArtigos}}"
                ordem="asc" ordemcol="0"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="649884984"
                modal="sim"
                ></tabela-lista>
            </painel>
        </div>
    </div>
</div>
<modal nome="adicionar" titulo="Adicionar participante">
    <formulario css="" action="#" method="post" enctype="" token="">
        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua example, 82">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) X XXXX-XXXX">
        </div>
        <button class="btn btn-info">Adicionar</button>
    </formulario>
</modal>
<modal nome="editar" titulo="Editar participante">
    <formulario css="" action="#" method="post" enctype="" token="">
        <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua example, 82">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) X XXXX-XXXX">
        </div>
        <button class="btn btn-info">Editar</button>
    </formulario>
</modal>
@endsection