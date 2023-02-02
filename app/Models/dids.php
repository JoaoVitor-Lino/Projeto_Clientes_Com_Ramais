<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dids extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'dids';
    protected $fillable = ['numero', 'descricao', 'cliente_id'];
    
    public function clientes() 
    {
        return $this->belongsTo(clientes::class);
    }

    public function newInfo($data)
    {
        $info = $this->create($data);
        return $info;
    }
}
