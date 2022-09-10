@extends('layouts.app')
@section('title', 'Editar telefone')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cliente.show', $cliente->id) }}">Detalhar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Adicionar telefone</li>
                        </ol>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('phones.update', $telefone->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-2">
                                <label for="phone">Telefone:</label>
                                <input type="text" name="telefone" id="phone" class="form-control" value="{{ $telefone->telefone }}" placeholder="Telefone do cliente"/>
                            </div>
                            <div class="form-group mb-2">
                                <label for="description">Descricao:</label>
                                <input type="text" name="descricao" id="description" class="form-control" value="{{ $telefone->descricao }}" placeholder="Descrição do telefone"/>
                            </div>
                            <button class="btn btn-outline-primary">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection