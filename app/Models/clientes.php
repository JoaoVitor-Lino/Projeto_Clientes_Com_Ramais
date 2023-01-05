<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory; 
    
    protected $table = 'clientes';

    protected $fillable = ['nome', 'telefone', 'email', 'endereco', 'tipo', 'documento'];

    public function dids() {
        return $this->hasMany(dids::class, 'cliente_id');
    }

    public function ramais() {
        return $this->hasMany(ramais::class, 'cliente_id');
    }
}
