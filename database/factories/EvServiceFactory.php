<?php

namespace Database\Factories;

use App\Models\EvService;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EvService::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'title_ar' => $this->faker->sentence,
            'content' => $this->faker->text,
            'content_ar' => $this->faker->text,
            'image_url' => $this->faker->imageUrl()

        ];
    }
}
