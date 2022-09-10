@extends('layouts.app')
@section('title', 'Listar clientes')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><span>Clientes</span></li>
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
                                @foreach($clientes as $cliente)
                                    <tr>
                                        <td><a href="{{ route('cliente.show', $cliente->id) }}" class="text-decoration-none">{{ $cliente->nome }}</a></td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->endereco }}</td>
                                        <td>
                                            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="post" id="delete-form">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                <button class="btn btn-outline-secondary btn-sm" onclick="return confirm('Você tem certeza de que deseja deletar este registro?')">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <div class="pagination justify-content-center">
                                            {{ $clientes->links('pagination::bootstrap-4') }}
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection