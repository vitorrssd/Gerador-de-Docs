<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\information>
 */
class InformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>user::all()->random()->id,
            'Name'=>user::all()->random()->Name,
            'CPF'=>$this->faker->NumberBetween(1000, 10000),
            'Rg'=>$this->faker->NumberBetween(1000, 10000),
            'Sexo'=>user::all()->random()->Sexo,
            'Endereço'=>user::all()->random()->Endereço,
            'Mãe'=>user::all()->random()->Name,
            'Pai'=>user::all()->random()->Name,
            'CEP e N°'=>$this->faker->NumberBetween(1000, 10000),
            'Cidade'=>user::all()->random()->Cidade,
            'Estado'=>user::all()->random()->Estado,
        ];
    }
}
