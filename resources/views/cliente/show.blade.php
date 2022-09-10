@extends('layouts.app')
@section('title', 'Detalhar cliente')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item active"><span>Detalhar</span></li>
                        </ol>
                        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Adicionar</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th colspan="2">Endereço</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>{{ $cliente->nome }}</a></td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->endereco }}</td>
                                        <td>
                                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                <button class="btn btn-outline-secondary btn-sm" onclick="return confirm('Você tem certeza de que deseja deletar este registro?')">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td>Telefone</td>
                                    <td>Descrição</td>
                                    <td>Data Criação</td>
                                    <td colspan="2">Data Atualização</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cliente->telefones as $telefones)
                                    <tr>
                                        <td>{{ $telefones->telefone }}</td>
                                        <td>{{ $telefones->descricao }}</td>
                                        <td>{{ $telefones->created_at }}</td>
                                        <td>{{ $telefones->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('phones.destroy', $telefones->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('phones.edit', $telefones->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                @if(count($cliente->telefones) > 1)
                                                    <button class="btn btn-outline-secondary btn-sm" onclick="return confirm('Você tem certeza de que deseja deletar este telefone?')">Excluir</button>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <a href="{{ route('cliente.phones.create', $cliente->id) }}" class="btn btn-outline-primary">Adicionar Telefone</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section
@endsection