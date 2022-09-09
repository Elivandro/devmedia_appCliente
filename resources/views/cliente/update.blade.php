@extends('layouts.app')
@section('title', 'Adicionar novo cliente')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('clientes.create') }}">Adicionar</a></li>
                            <li class="breadcrumb-item active">Editar</li>
                        </ol>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-2">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" value="{{ $cliente->nome }}" id="nome" class="form-control" placeholder="Nome do cliente"/>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="{{ $cliente->email }}"  id="email" class="form-control" placeholder="Email do cliente"/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="endereco">Endereço:</label>
                                <input type="text" name="endereco" value="{{ $cliente->endereco }}"  id="endereco" class="form-control" placeholder="Endereço do cliente"/>
                            </div>
                            <button class="btn btn-outline-primary">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection