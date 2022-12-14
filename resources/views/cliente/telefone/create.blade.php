@extends('layouts.app')
@section('title', 'Adicionar novo telefone')
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
                        <form action="{{ route('cliente.phones.store', $cliente->id) }}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="phone">Telefone:</label>
                                <input type="text" name="telefone" id="phone" class="form-control {{ $errors->has('telefone') ? 'border border-danger' : 'border border-primary' }}" placeholder="Telefone do cliente"/>
                                @if($errors->has('telefone'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('telefone') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <label for="description">Descricao:</label>
                                <input type="text" name="descricao" id="description" class="form-control {{ $errors->has('descricao') ? 'border border-danger' : 'border border-primary' }}" placeholder="Descrição do telefone"/>
                                @if($errors->has('telefone'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button class="btn btn-outline-primary">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection