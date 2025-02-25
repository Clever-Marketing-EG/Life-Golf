<?php

namespace Database\Factories;

use App\Models\Terms;
use Illuminate\Database\Eloquent\Factories\Factory;

class TermsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Terms::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'desc' => $this->faker->sentence,
            'desc_ar' => $this->faker->sentence


        ];
    }
}
