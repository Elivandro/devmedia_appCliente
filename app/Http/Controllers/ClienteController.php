<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;

class ClienteController extends Controller
{
    protected $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->middleware('auth');
        $this->clientes = $cliente;
    }

    public function index()
    {
        $clientes = $this->clientes->paginate(10);
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }

    public function store(ClienteRequest $request)
    {
        $this->clientes->create($request->all());
        return redirect()->route('cliente.create')->with('success', 'Cliente adicionado com sucesso!');
    }

    public function show($id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->route('cliente.index')->with('destroy', 'Cliente não encontrado');

        return view('cliente.show', compact('cliente'));
    }

    public function edit($id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->route('cliente.index')->with('destroy', 'Cliente não encontrado');

        return view('cliente.update', compact('cliente'));
    }

    public function update(ClienteRequest $request, $id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->back()->with('destroy', 'Cliente não encontrado');

        $cliente->update($request->all());
        return redirect()->route('cliente.index')->with('success', 'Cliente editado com sucesso');
    }

    public function destroy($id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->route('cliente.index');

        $cliente->delete();
        return redirect()->route('cliente.index')->with('destroy', 'Cliente deletado com sucesso');
    }
}
