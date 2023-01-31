<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formRegister()
    {
        return view('auth.register');
    }
    
    public function formLogin()
    {
        if(Auth::check())
        {
            return redirect()->route('cadastro.show');
        }
            return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validated();
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('cadastro.show');
        }

            return redirect()->route('login')
            ->with('messages', 'Login incorreto');
        }

        public function logout(Request $request)
        {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login');
        }
    }
    