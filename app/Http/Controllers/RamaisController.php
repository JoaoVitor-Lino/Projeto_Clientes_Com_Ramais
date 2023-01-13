<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRamais;
use App\Http\Requests\UpdateRamais;
use App\Models\clientes;
use App\Models\ramais;
use Illuminate\Http\Request;


class RamaisController extends Controller
{
    public function tabela()
    {
        $cliente = ramais::join('clientes', 'clientes.id', '=', 'ramais.cliente_id')
        ->select('ramais.*', 'clientes.nome')
        ->get();
        return view('admin.ramais.tabela', compact('cliente'));
    }

    public function create() 
    {
        $dados = clientes::get();    
        return view('admin.ramais.create' , compact('dados'));
    }

    public function store(StoreRamais $request)
    {
        $ramal = new ramais;
        $response = $ramal->newInfo($request->all());

        if(!$response)
        {
            return redirect()->back()
                             ->with('messages', 'Não foi possível criar um novo Ramal');
        }
        return redirect()->route('ramais.tabela')
                         ->with('messages', 'Ramal criado com sucesso');
    }
    
    public function destroy($id) 
    {
        $ramal = ramais::find($id);
        if(!$ramal) {
            return redirect()->route('ramais.tabela')
                             ->with('messages', 'Ramal não encontrado');
        }
        $ramal->delete();
        return redirect()->route('ramais.tabela')
                         ->with('messages', 'Ramal deletado com sucesso');
    }

    public function edit($id) 
    {

        $dados = clientes::get();
        $ramal = ramais::find($id);
        if(!$ramal) {
            return redirect()->route('ramais.tabela')
                             ->with('message', 'Não foi possível editar o ramal');
        }
        return view('admin.ramais.edit', compact('ramal', 'dados'));
    }

    public function update(UpdateRamais $request, $id) 
    {
        
        $ramal = ramais::find($id);
        if(!$ramal) {
            return redirect()->route('ramais.tabela')
                             ->with('messages', 'Ramal editado com sucesso');
        }
        $ramal->update($request->all());
        return redirect()->route('ramais.tabela')
                         ->with('messages', 'ramal editado com sucesso');
    }

}
