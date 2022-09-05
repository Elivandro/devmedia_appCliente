@extends('layouts.app')
@section('title', 'Listar clientes')
@section('content')
    <section>
        <table class="table table-striped table-bordered table-hover w-75 mx-auto">
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
                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                            <a href="#" class="btn btn-secondary btn-sm">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <div class="pagination d-flex justify-content-center">
                            {{ $clientes->links('pagination::bootstrap-4') }}
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>

    </section>
@endsection