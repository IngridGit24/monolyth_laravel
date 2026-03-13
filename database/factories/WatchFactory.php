<?php

namespace Database\Factories;

use App\Models\Watch;
use Illuminate\Database\Eloquent\Factories\Factory;

class WatchFactory extends Factory
{
    protected $model = Watch::class;

    public function definition()
    {
        return [
            'brand' => $this->faker->randomElement(['Rolex', 'Omega', 'Seiko', 'Casio', 'Fossil']),
            'model' => $this->faker->bothify('Model ###'),
            'strap_material' => $this->faker->randomElement(['Leather', 'Steel', 'Nylon', 'Silicone']),
            'water_resistance' => $this->faker->randomElement(['30m', '50m', '100m', '200m']),
            'price' => $this->faker->numberBetween(100, 5000),
            'color' => $this->faker->safeColorName(),
            'description' => $this->faker->paragraph(2),
        ];
    }
}

