<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bpjs>
 */
class BpjsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => $this->faker->uuid, // atau bisa pakai string acak lain sesuai kebutuhan
        ];
    }
}
