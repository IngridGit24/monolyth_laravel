<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    protected $model = Phone::class;

    public function definition()
    {
        return [
            'phone_brand' => $this->faker->randomElement(['Apple', 'Samsung', 'Google', 'OnePlus', 'Xiaomi']),
            'phone_model' => $this->faker->bothify('Series ##'),
            'phone_storage' => $this->faker->randomElement(['64GB', '128GB', '256GB', '512GB']),
            'phone_ram' => $this->faker->randomElement(['4GB', '6GB', '8GB', '12GB']),
            'phone_price' => $this->faker->numberBetween(300, 1500),
            'phone_color' => $this->faker->safeColorName(),
            'phone_weight' => $this->faker->randomFloat(2, 120, 250),
            'phone_dimensions' => $this->faker->randomElement(['146 x 71 x 7.6 mm', '160 x 75 x 8.4 mm']),
            'phone_features' => $this->faker->sentence(8),
            'description' => $this->faker->paragraph(2),
            'phone_image' => null,
        ];
    }
}

