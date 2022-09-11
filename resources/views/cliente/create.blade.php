@extends('layouts.app')
@section('title', 'Adicionar novo cliente')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('cliente.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item active">Adicionar</li>
                        </ol>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cliente.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control {{ $errors->has('nome') ? 'border border-danger' : 'border border-primary' }}" placeholder="Nome do cliente"/>
                                @if($errors->has('nome'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('nome') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'border border-danger' : 'border border-primary' }}" placeholder="Email do cliente"/>
                                @if($errors->has('email'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <label for="endereco">Endereço:</label>
                                <input type="text" name="endereco" id="endereco" class="form-control {{ $errors->has('endereco') ? 'border border-danger' : 'border border-primary' }}" placeholder="Endereço do cliente"/>
                                @if($errors->has('nome'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('endereco') }}</strong>
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