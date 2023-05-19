<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa_Residencia_Medica extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descricao',
        'Observacao',
    ];

    protected $table = 'programas_residencia_medica';
}
