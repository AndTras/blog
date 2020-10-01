<?php

namespace Database\Factories;

use App\Models\autor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class autorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = autor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
        ];
    }
}
