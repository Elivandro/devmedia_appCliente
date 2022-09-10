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
        return redirect()->route('cliente.show', compact('cliente'))->with('sucess', 'Telefone adicionado com sucesso');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        if(!$telefone = $this->telefones->find($id))
            return redirect()->back()->with('destroy', 'Telefone não encontrado');

        $telefone->delete();
        return redirect()->route('cliente.show')->with('destroy', 'Telefone Deletado com sucesso');
    }
}
