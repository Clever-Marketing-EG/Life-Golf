<?php

namespace Database\Factories;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Factories\Factory;

class CertificateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Certificate::class;

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
            'image_url' => 'http://life-golf.cloveregypt.com/be/public/storage/meta_images/certificate_1617035818.png'
        ];
    }
}
