<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome',
        'Matricula',
        'Programa_de_Residencia_Medica',
        'Observacao',
    ];

    protected $guarded = [];

    protected $table = 'residentes';
}
