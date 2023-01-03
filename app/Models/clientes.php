<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory; 
    
    protected $table = 'clientes';

    protected $fillable = ['nome', 'telefone', 'email', 'endereco', 'tipo', 'documento'];
}
