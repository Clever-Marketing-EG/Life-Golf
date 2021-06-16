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

        $point1 = $this->faker->text;
        $point2 = $this->faker->text;
        $point3 = $this->faker->text;
        $points = '["'.$point1.'","'.$point2.'","'.$point3.'"]';

        return [
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'points' => $points,
            'points_ar' => $points,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'features' => $this->faker->text,
            'features_ar' => $this->faker->text,
            'image_url' => 'http://127.0.0.1:8000/storage/specs_images/gh1pf7x0BseMEakFqKgN0ytQnlMR8RWgirs3EquA.jpg',
            'sub_category_id' => $this->faker->numberBetween(1, 25),
        ];
    }
}
