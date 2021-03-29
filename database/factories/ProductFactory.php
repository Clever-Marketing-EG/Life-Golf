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
            'features' => $this->faker->word,
            'features_ar' => $this->faker->word,
            'image_url' => $this->faker->imageUrl(),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
