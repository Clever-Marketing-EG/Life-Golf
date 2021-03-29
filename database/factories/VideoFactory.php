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
            'image_url' => $this->faker->imageUrl(),
            'video_url' => 'https://www.youtube.com/embed/tgbNymZ7vqY',
            'title' =>$this->faker->sentence,
            'title_ar' =>$this->faker->sentence,
            'description' => $this->faker->sentence,
            'description_ar' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['factory', 'product'])
        ];
    }
}
