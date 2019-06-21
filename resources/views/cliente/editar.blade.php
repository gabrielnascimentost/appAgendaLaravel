@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes</a></li>
                    <li class="active">Editar</li>
                </ol>
                <div class="panel-body">
                    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put"/>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="{{ $cliente->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" class="form-control" name="email" id="email" value="{{ $cliente->email }}">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" value="{{ $cliente->endereco }}">
                        </div>
                        <button class="btn btn-primary">Atualizar</button>
                    </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
