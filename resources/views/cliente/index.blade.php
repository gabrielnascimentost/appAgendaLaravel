@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Clientes</li>
                </ol>

                <div class="panel-body">
                    <p>
                        <a class="btn btn-primary" href="{{ route('cliente.adicionar') }}">Adicionar</a>
                    </p>

                    <table class="table table-bordred">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Endereço</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <th scope="row">{{ $cliente->id }}</th>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->email }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>
                                    <a href="{{ route('cliente.detalhe', $cliente->id) }}" class="btn btn-info">Detalhes</a>
                                        <a href="{{ route('cliente.editar', $cliente->id) }}" class="btn btn-warning">Editar</a>
                                        <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('cliente.deletar',$cliente->id)}}' : false)">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>

                    <div style="text-align: center">
                        {!! $clientes->links() !!}  <!-- exibe html dentro do !! -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
