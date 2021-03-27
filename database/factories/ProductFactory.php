<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'battery' => $this->faker->word,
            'motor' => $this->faker->word,
            'controller' => $this->faker->word,
            'charger' => $this->faker->word,
        ];
    }
}
