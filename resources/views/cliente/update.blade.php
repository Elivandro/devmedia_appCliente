@extends('layouts.app')
@section('title', 'Editar cliente')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item active">Editar</li>
                        </ol>
                        <a href="{{ route('cliente.create') }}" class="btn btn-primary">Adicionar</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cliente.update', $cliente->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group mb-2">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" value="{{ $cliente->nome }}" id="nome" class="form-control {{ $errors->has('nome') ? 'border border-danger' : 'border border-primary' }}" placeholder="Nome do cliente"/>
                                @if($errors->has('nome'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" value="{{ $cliente->email }}"  id="email" class="form-control {{ $errors->has('email') ? 'border border-danger' : 'border border-primary' }}" placeholder="Email do cliente"/>
                                @if($errors->has('email'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="endereco">Endereço:</label>
                                <input type="text" name="endereco" value="{{ $cliente->endereco }}"  id="endereco" class="form-control {{ $errors->has('encereco') ? 'border border-danger' : 'border border-primary' }}" placeholder="Endereço do cliente"/>
                                @if($errors->has('endereco'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('endereco') }}</strong>
                                </span>
                                @endif
                            </div>
                            <button class="btn btn-outline-primary">Editar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection