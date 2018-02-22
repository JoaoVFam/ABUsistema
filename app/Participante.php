<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nome', 'email', 'telefone', 'endereco',
    ];
}
