<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dids extends Model
{
    use HasFactory;

    protected $table = 'dids';
    protected $fillable = ['numero', 'descricao', 'cliente_id'];

    public function clientes() {
        return $this->belongsTo(clientes::class);
    }
}
