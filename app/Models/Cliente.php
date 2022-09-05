<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Cliente extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'id',
        'nome',
        'email',
        'endereco',
        'created_at',
        'updated_at'
    ];

    public function Telefones()
    {
        return $this->hasMany(Telefone::class);
    }

    public function addTelefone(Telefone $phone)
    {
        $this->telefones()->save($phone);
    }
}
