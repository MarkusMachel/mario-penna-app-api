<?php

namespace Tests\Unit;

use App\Http\Controllers\AtividadeController;
use App\Models\Atividade;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Request;
use Tests\TestCase;

class AtividadeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testBuscarAtividade()
    {
        // Create a dummy atividade record
        $atividade = Atividade::factory()->create();

        // Send a GET request to the route with the atividade ID
        $response = $this->get(route('atividade.buscarAtividade', ['id' => $atividade->id]));

        // Assert that the response has a successful status code
        $response->assertStatus(200);

        // Assert that the response JSON contains the atividade data
        $response->assertJson([
            'id' => $atividade->id,
            'Descricao' => $atividade->Descricao,
            'Tipo_de_Atividade' => $atividade->Tipo_de_Atividade,
            // Add more assertions for other attributes as needed
        ]);
    }
    public function testSalvarAtividade()
    {
        $payload = [
            'Descricao' => 'Sample Description',
            'Tipo_de_Atividade' => 'Sample Type',
            'Multiplicador' => 1.5,
        ];

        $response = $this->post(route('atividade.salvarAtividade'), $payload);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Data stored successfully']);

        $this->assertDatabaseHas('atividades', $payload);
    }
    // public function testSalvarAtividade()
    // {
    //     $requestPayload = [
    //         'Descricao' => 'Some description',
    //         'Tipo_de_Atividade' => 'Some type',
    //         'Multiplicador' => 'Some multiplier',
    //     ];

    //     $mockedAtividade = // Create a mocked instance of the Atividade model

    //     $request = Request::create('/atividade', 'POST', $requestPayload);

    //     $controller = new AtividadeController();
    //     $response = $controller->salvarAtividade($request);

    //     $this->assertEquals(200, $response->getStatusCode());
    //     $this->assertDatabaseHas('atividades', [
    //         'Descricao' => 'Some description',
    //         'Tipo_de_Atividade' => 'Some type',
    //         'Multiplicador' => 'Some multiplier',
    //     ]);
    // }
}
