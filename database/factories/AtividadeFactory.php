<?php

namespace Database\Factories;

use App\Models\Atividade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atividade>
 */
class AtividadeFactory extends Factory
{
    protected $model = Atividade::class;

    public function definition()
    {
        return [
            'Descricao' => $this->faker->sentence,
            'Tipo_de_Atividade' => $this->faker->word,
            'Multiplicador' => $this->faker->randomFloat(2, 1, 10),
        ];
    }
}
