<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDids;
use App\Http\Requests\UpdateDids;
use App\Models\clientes;
use App\Models\dids;
use Illuminate\Http\Request;


class DidsController extends Controller
{
    public function tabela() 
    {
         $cliente = dids::join('clientes', 'dids.cliente_id', '=', 'clientes.id')
        ->select('dids.*', 'clientes.nome')
        ->get();
        return view('admin.dids.tabela', compact( 'cliente'));
    }

    public function create() 
    {
        $dados = clientes::get();
        return view('admin.dids.create', compact('dados'));
    }

    public function store(StoreDids $request) 
    { 
        $did = new dids;
        $response = $did->newInfo($request->all());
        
        if(!$response)
        {
            return redirect()->back()
                             ->with('messages', 'Não foi possível criar um novo Did');
        }
        return redirect()->route('dids.tabela')
                         ->with('messages', 'Did criado com sucesso');
        
    }

    public function destroy($id) 
    {
        $did = dids::find($id);
        if (!$did) {
            return redirect()->route('dids.tabela')
                             ->with('messages', 'Did não encontrado');
        }
        $did->delete();
        return redirect()->route('dids.tabela')
                         ->with('messages', 'Did deletado com sucesso');
    }

    public function edit($id) 
    {
        $dados = clientes::get();
        $did = dids::find($id);
        if(!$did) {
            return redirect()->back()
                             ->with('messages', 'Não foi possível editar o did');
        }
        return view('admin.dids.edit', compact('did', 'dados'));
    }

    public function update(UpdateDids $request ,$id) 
    {
        $did = dids::find($id);
        if (!$did) {
            return redirect()->back()
                             ->with('messages', 'Não foi possível editar o did');
        }    
        $did->update($request->all());
        return redirect()->route('dids.tabela')
                         ->with('messages', 'Did editado com sucesso');
    }
}
