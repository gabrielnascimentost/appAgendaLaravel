@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li><a href="{{ route('cliente.detalhe', $cliente->id) }}">Detalhe</a></li>
                    <li class="active">Adicionar</li>
                </ol>
                <div class="panel-body">
                <p><b>Cliente: </b>{{ $cliente->nome }}</p> 
                    <form action="{{ route('telefone.salvar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do telefone">
                        </div>
                        <div class="form-group">
                            <label for="email">Número</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Número do telefone">
                        </div>
                        <button class="btn btn-primary">Adicionar</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
