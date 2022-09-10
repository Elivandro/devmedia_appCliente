<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Cliente,
    Telefone
};

class TelefonesController extends Controller
{
    private $clientes;
    private $telefones;

    public function __construct(Cliente $clientes, Telefone $telefones)
    {
        $this->middleware('auth');
        $this->clientes = $clientes;
        $this->telefones = $telefones;
    }

    public function create($id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->back()->with('destroy', 'Cliente não encontrado');

        return view('cliente.telefone.create', compact('cliente'));
    }

    public function store(Request $request, $id)
    {
        if(!$cliente = $this->clientes->find($id))
            return redirect()->back()->with('destroy', 'Cliente não encontrado');

        $telefone = $request->all();
        $telefone['cliente_id'] = $id;

        $this->telefones->create($telefone);
        return redirect()->route('cliente.show', compact('cliente'))->with('success', 'Telefone adicionado com sucesso');
    }

    public function edit($id)
    {
        if(!$telefone = $this->telefones->find($id))
            return redirect()->back()->with('destroy', 'Telefone não encontrado');

        $cliente = $this->clientes->find($telefone->cliente_id);
        return view('cliente.telefone.update', compact('telefone', 'cliente'));
    }

    public function update(Request $request, $id)
    {
        if(!$telefone = $this->telefones->find($id))
            return redirect()->back()->with('destroy', 'Telefone não encontrado');

        $cliente = $this->clientes->find($telefone->cliente_id);

        $telefone->update($request->all());
        return redirect()->route('cliente.show', compact('cliente'))->with('success', 'Telefone atualizado com sucesso');
    }

    public function destroy($id)
    {
        if(!$telefone = $this->telefones->find($id))
            return redirect()->back()->with('destroy', 'Telefone não encontrado');

        $cliente = $this->clientes->find($telefone->cliente_id);

        $telefone->delete();
        return redirect()->route('cliente.show', compact('cliente'))->with('destroy', 'Telefone Deletado com sucesso');
    }
}
