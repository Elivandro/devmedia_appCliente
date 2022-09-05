<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'telefones',
        'descricao',
        'cliente_id',
        'created_at',
        'updated_at'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
