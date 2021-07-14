<?php

namespace Database\Factories;

use App\Models\EvProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'points' => $this->randomStringsArray(),
            'points_ar' => $this->randomStringsArray(),
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'highlights' => $this->faker->text,
            'highlights_ar' => $this->faker->text,
            'images' => [$this->faker->imageUrl(), $this->faker->imageUrl(), $this->faker->imageUrl()]
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
