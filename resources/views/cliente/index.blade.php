@extends('layouts.app')
@section('title', 'Listar clientes')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item active">Clientes</li>
                            <li class="breadcrumb-item"><a href="{{ route('clientes.create') }}">Adcionar</a></li>
                        </ol>
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
                                        <td>{{ $cliente->nome }}</td>
                                        <td>{{ $cliente->email }}</td>
                                        <td>{{ $cliente->endereco }}</td>
                                        <td>
                                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                                                <button class="btn btn-outline-secondary btn-sm">Excluir</button>
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