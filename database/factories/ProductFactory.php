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
            'points' => $this->randomStringsArray(),
            'points_ar' => $this->randomStringsArray(),
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'features' => $this->randomStringsArray(),
            'features_ar' => $this->randomStringsArray(),
            'images' => [$this->faker->imageUrl(), $this->faker->imageUrl(), $this->faker->imageUrl()],
            'specifications_image_url' => $this->faker->imageUrl(),
            'sub_category_id' => $this->faker->numberBetween(1, 25),
        ];
    }

    /**
     * Returns an array of random strings
     *
     * @return array
     */
    private function randomStringsArray(): array
    {
        return [
            $this->faker->sentence, $this->faker->sentence, $this->faker->sentence
        ];
    }
}
