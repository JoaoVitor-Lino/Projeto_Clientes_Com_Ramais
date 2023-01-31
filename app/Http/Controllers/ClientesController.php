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
        $cliente = new clientes;
        $response = $cliente->newInfo($request->all());
        
        if(!$response) 
        {
            return redirect()->back()
                             ->with('messages', 'Não foi possível criar um novo Cliente');
        }
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
    public function clienteCsv(){
        $clientes = Clientes::get();
        
        $file = fopen('php://output', 'w');
        header('Content-type: application/csv');
        header('Content-Disposition: attachement; filename=relatorio_cliente.csv');
        //header
        fputcsv($file, array('Id', 'Nome', 'Email', 'Endereco', 'Tipo', 'Documento'),";");
        foreach ($clientes as $cliente) {
            fputcsv($file, array($cliente->id, $cliente->nome, $cliente->email, $cliente->endereco, $cliente->tipo, $cliente->documento),";");
        }
        fclose($file);
        exit;


    }

    public function vinculo() 
    {
        $clientes = Clientes::with('ramais', 'dids')->get();

        return view('admin.clientes.vinculos', compact('clientes'));
    }

    public function vinculoCsv()
    {  
        $clientes = Clientes::with('ramais', 'dids')->get();
        $file = fopen('php://output', 'r');
        header('Content-type: application/csv');
        header('Content-Type: text/html; charset=utf-8');
        header('Content-Disposition: attachment; filename=relatiorio_total.csv');
        foreach($clientes as $cliente)
        {
            fputcsv($file, array($cliente->nome),";");

            fputcsv($file, array("Ramais"));
            fputcsv($file, array('', 'Id', 'Ramal', 'Nome', 'Tipo', 'Bina'),";");

            foreach($cliente['ramais'] as $ramais)
            {
                fputcsv($file, array('',$ramais->id, $ramais->ramal, $ramais->nomes, $ramais->tipo, $ramais->bina),";");
            }

            fputcsv($file, array("Dids"));
            fputcsv($file, array('', 'Id', 'Número', 'Descrição'),";");
            foreach($cliente['dids'] as $dids)
            {
                fputcsv($file, array('',$dids->id, $dids->numero, $dids->descricao),";");
            }

            fputcsv($file, array(""));
        }
    }
}
