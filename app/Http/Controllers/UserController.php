<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(StoreUser $request)
    {
        $user = new User;
        $response = $user->infoStore($request->all());
        
        if(!$response) 
        {
            return redirect()->route('cadstro.show')
            ->with('messages', 'Não foi possível criar um novo usuário');
        }
        return redirect()->route('login')
        ->with('messages', 'Usuário criado com sucesso');   
    }
    
    public function show()
    {
        $users = User::get();
        
        return view('auth.show', compact('users'));
    }
    
    public function userCsv() {
        //$users = User::select('id', 'name', 'email')->get();
        $users = User::get();
        //dd($users);
            
            $file = fopen('php://output', 'w');
            header('Content-type: application/csv');
            header('Content-Disposition: attachment; filename=relatorio_usuarios.csv');
            // Header

            fputcsv($file, array( 'id', 'nome', 'E-mail'),";");
            foreach($users as $user){
                fputcsv($file, array($user->id,$user->name, $user->email),";");
                
            }
        
        fclose($file);
        exit;
        
    }
}
