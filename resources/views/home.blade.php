@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <painel titulo="Home">
                <div class="row">
                    <div class="col-md-4">
                        <caixa titulo="Participantes" descricao="pessoas" url="{{route('participantes.index')}}" cor="red" icone="fa fa-user"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa titulo="Livros" descricao="pessoas" url="#" cor="blue" icone="fa fa-book"></caixa>
                    </div>
                    <div class="col-md-4">
                        <caixa titulo="Admin" descricao="pessoas" url="#" cor="green" icone="fa fa-key"></caixa>
                    </div>
                </div>
            </painel>
        </div>
    </div>
</div>
@endsection
