<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerenciar_Pontuacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'Data',
        'Residente',
        'Atividade',
        'Pontuacao',
    ];

}
