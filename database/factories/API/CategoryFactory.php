<?php

namespace Database\Factories\API;

use App\Models\API\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\API\Category>
 */
class CategoryFactory extends Factory
{

  protected $model = Category::class;

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'nome' => $this->faker->unique()->name(),
      'descricao' => $this->faker->sentence(20),
    ];
  }
}
