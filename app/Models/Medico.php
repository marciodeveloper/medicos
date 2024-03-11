<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    //Campos da Tabela
    protected $fillable = [
        'nome',
        'especialidade',
        'crm',
    ];
}
