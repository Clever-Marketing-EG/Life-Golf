<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'image_url' => $this->faker->imageUrl(),
            'video_url' => $this->faker->sentence,
            'title' =>$this->faker->word,
            'description' => $this->faker->sentence,
            'date' => $this->faker->dateTimeBetween('now', '+30 years')
        ];
    }
}
