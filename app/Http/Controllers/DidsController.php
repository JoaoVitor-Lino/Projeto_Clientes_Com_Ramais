<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDids;
use App\Models\clientes;
use App\Models\dids;
use Illuminate\Http\Request;

class DidsController extends Controller
{
    public function tabela() {
        $did = dids::get();

        return view('admin.dids.tabela', compact('did'));
    }

    public function create() {
        $dados = clientes::get();

        return view('admin.dids.create', compact('dados'));
    }

    public function store(StoreDids $request) {
        dids::create($request->all());
        return redirect()->route('dids.tabela')
                         ->with('messages', 'Did criado com sucesso');
        
    }
}
