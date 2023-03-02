<?php

namespace Database\Factories\API;

use App\Models\API\Unity;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Unity>
 */
class UnityFactory extends Factory
{

  protected $model = Unity::class;

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'nome' => $this->faker->unique()->name(),
      'descricao' => $this->faker->sentence(20),
    ];
  }
}
