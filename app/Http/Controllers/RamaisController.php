<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRamais;
use App\Http\Requests\UpdateRamais;
use App\Models\clientes;
use App\Models\ramais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RamaisController extends Controller
{
    public function tabela(){
        $cliente = DB::table('ramais')
        ->join('clientes', 'ramais.cliente_id', '=', 'clientes.id')
        ->select('ramais.*', 'clientes.nome')
        ->get();

        return view('admin.ramais.tabela', compact('cliente'));
    }

    public function create() {
        $dados = clientes::get();
        
        return view('admin.ramais.create' , compact('dados'));
    }

    public function store(StoreRamais $request){
        ramais::create($request->all());
        return redirect()->route('ramais.tabela')
                         ->with('messages', 'Ramal criado com sucesso');
    }
    
    public function destroy($id) {
        $ramal = ramais::find($id);
        if(!$ramal) {
            return redirect()->route('ramais.tabela')
                             ->with('messages', 'Ramal não encontrado');
        }
        $ramal->delete();
        return redirect()->route('ramais.tabela')
                         ->with('messages', 'Ramal deletado com sucesso');
    }

    public function edit($id) {
        $dados = clientes::get();
        $ramal = ramais::find($id);
        if(!$ramal) {
            return redirect()->route('ramais.tabela')
                             ->with('message', 'Não foi possível editar o ramal');
        }
        return view('admin.ramais.edit', compact('ramal', 'dados'));
    }

    public function update(UpdateRamais $request, $id) {
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
