<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $point1 = $this->faker->word;
        $point2 = $this->faker->word;
        $point3 = $this->faker->word;
        $points = '["'.$point1.'","'.$point2.'","'.$point3.'"]';

        $point1_ar = $this->faker->word;
        $point2_ar = $this->faker->word;
        $point3_ar = $this->faker->word;
        $points_ar = '["'.$point1_ar.'","'.$point2_ar.'","'.$point3_ar.'"]';
        return [

            'name' => $this->faker->word,
            'name_ar' => $this->faker->word,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'title1' => $this->faker->sentence,
            'title1_ar' => $this->faker->sentence,
            'title2' => $this->faker->sentence,
            'title2_ar' => $this->faker->sentence,
            'image_url_1' => $this->faker->imageUrl(),
            'image_url_2' => $this->faker->imageUrl(),
            'image_url_3' => $this->faker->imageUrl(),
            'points' => $points,
            'points_ar' => $points_ar,
            'points_2' => $points,
            'points_2_ar' => $points_ar

        ];
    }
}
