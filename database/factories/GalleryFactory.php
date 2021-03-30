<?php

namespace Database\Factories;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence,
            'description_ar' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['factory', 'product'])
        ];
    }
}
