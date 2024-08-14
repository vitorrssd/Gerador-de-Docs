<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name'=>user::all()->random()->Nome,
            'CNPJ'=>$this->faker->NumberBetween(1000, 10000),
            'InscriçãoEstadual'=>$this->faker->NumberBetween(1000, 10000),
            'DataDeAbertura'=>$this->faker->NumberBetween(1000, 10000),
            'CEP'=>$this->faker->NumberBetween(1000, 10000),
            'Endereço'=>user::all()->random()->Endereço,
            'Número'=>$this->faker->NumberBetween(1000, 10000),
            'Cidade'=>user::all()->random()->Cidade,
            'Estado'=>user::all()->random()->Estado,
            'Telefone'=>$this->faker->NumberBetween(1000, 10000),
        ];
    }
}
