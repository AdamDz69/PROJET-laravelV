<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Goat;
use Faker\Generator as Faker;

class GoatFactory extends Factory
{
    protected $model = Goat::class;

    public function definition()
    {
        return [
            'sex' => $this->faker->boolean,
            'name' => $this->faker->firstName,
            'price' => $this->faker->randomFloat(2, 50, 500),
            'color' => $this->faker->colorName,
            'birthday' => $this->faker->date,
            // Les colonnes 'id' et 'timestamps' sont générées automatiquement par Laravel
        ];
    }
}
