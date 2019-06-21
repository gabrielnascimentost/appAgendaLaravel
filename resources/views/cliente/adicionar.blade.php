@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="active">Adicionar</li>
                </ol>
                <div class="panel-body">
                    <form action="{{ route('cliente.salvar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do cliente">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail do cliente">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço do cliente">
                        </div>
                        <button class="btn btn-primary">Adicionar</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
