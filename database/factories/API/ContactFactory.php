<?php

namespace Database\Factories\API;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Contact>
 */
class ContactFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'nome' => $this->faker->unique()->name(),
      'nome_fantasia' => $this->faker->unique()->name(),
      'cpf' => Str::random(11),
      'cnpj' => Str::random(18),
      'data_cadastro' => $this->faker->date(),
      'fone' => Str::random(14),
      'celular' => Str::random(15),
      'email' => fake()->unique()->safeEmail(),
      'cep' => Str::random(14),
      'logradouro' => $this->faker->sentence(10),
      'numero' => Str::random(2),
      'uf' => Str::random(2),
      'cidade' => $this->faker->sentence(10),
      'complemento' => $this->faker->sentence(10),
      'bairro' => $this->faker->sentence(10),
      'rg' => Str::random(10),
    ];
  }
}
