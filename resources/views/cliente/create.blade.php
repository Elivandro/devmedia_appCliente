@extends('layouts.app')
@section('title', 'Adicionar novo cliente')
@section('content')
<section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item" aria-current="page"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                            <li class="breadcrumb-item active">Adcionar</li>
                        </ol>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('clientes.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome do cliente"/>
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email do cliente"/>
                            </div>
                            <div class="form-group mb-3">
                                <label for="endereco">Endereço:</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço do cliente"/>
                            </div>
                            <button class="btn btn-outline-primary">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection