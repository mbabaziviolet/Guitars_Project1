<?php

namespace Database\Factories;

use App\Models\GuitarImage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuitarImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GuitarImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->word,
        'guitar_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
