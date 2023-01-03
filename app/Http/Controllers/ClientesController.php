<?php

namespace App\Http\Controllers;

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

    public function store(Request $request) {
        clientes::create($request->all());

        return redirect()->route('clientes.visualizar');
        

    }
}
