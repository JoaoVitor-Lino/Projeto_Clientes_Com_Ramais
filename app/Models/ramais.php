<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ramais extends Model
{
    use HasFactory, SoftDeletes;

    protected $table  = 'ramais';
    protected $fillable = ['ramal', 'nomes', 'tipo', 'bina', 'cliente_id'];

    public function clientes() {
        return $this->belongsTo(clientesntes::class);
    }

    public function newInfo($data)
    {
        $info = $this->create($data);
        return $info;
    }
}
