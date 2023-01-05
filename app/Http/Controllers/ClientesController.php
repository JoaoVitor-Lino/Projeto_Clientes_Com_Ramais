<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientes;
use App\Http\Requests\UpdateClientes;
use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() {      
        $clientes = clientes::get();

        
        return view('admin.clientes.index', compact('clientes'));
    }

    public function visualizar() {      
    
        $clientes = clientes::get();
        
        return view('admin.clientes.visualizar', compact('clientes'));
    }

    public function create() {
        
        return view('admin.clientes.create');
    }

    public function store(StoreClientes $request) {
        clientes::create($request->all());
        
        return redirect()->route('clientes.visualizar')
                         ->with('messages', 'Cliente criado com sucesso');    
    }

    public function destroy($id) {
        
        $cliente = clientes::find($id);
        if (!$cliente) {
            return redirect()->route('clientes.visualizar')
                            ->with('messages', 'Cliente não encontrado');
        }
        $cliente->delete();
        return redirect()->route('clientes.visualizar')
                         ->with('messages', 'Cliente deletado com sucesso');
    }

    public function edit($id) {
        $clientes = clientes::find($id);
        if (!$clientes) {
            return redirect()->back()
                             ->with('messages', 'Não possível foi editar esse cliente');
        }
        
        return view('admin.clientes.edit', compact('clientes'));
    }

    public function update(UpdateClientes $request, $id) {
        $clientes = clientes::find($id);
        if (!$clientes) {
            return redirect()->back()
                             ->with('messages', 'Não foi possível editar esse cliente');
        }
        
        $clientes->update($request->all());
        return redirect()->route('clientes.visualizar')
                         ->with('messages', 'Cliente editado com sucesso');
    }
}
