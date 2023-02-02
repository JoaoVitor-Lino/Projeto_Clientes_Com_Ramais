<?php

namespace App\Http\Controllers;

use App\Mail\SendMailUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mail(){
        $users = User::get();
        foreach($users as $user) { 

        Mail::to($user->email)->send(new SendMailUser($user));
        return redirect()->route('clientes.index');
        }
    }
}
