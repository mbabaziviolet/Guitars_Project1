<?php

namespace Database\Factories;

use App\Models\Guitar;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuitarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Guitar::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'type' => $this->faker->word,
        'image' => $this->faker->word,
        'price' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
