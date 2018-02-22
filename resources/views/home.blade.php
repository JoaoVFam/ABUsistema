@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col s12 m6">
                      <div class="card blue">
                        <div class="card-content white-text">
                            <span class="card-title">Favoritos</span>
                            <p>Lista de carros favoritos</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Visualizar</a>
                        </div>
                      </div>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
