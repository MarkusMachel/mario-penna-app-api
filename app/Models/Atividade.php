<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = [
        'Descricao',
        'Tipo_de_Atividade',
        'Multiplicador',
    ];
}
