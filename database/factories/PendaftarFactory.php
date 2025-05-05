<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftar>
 */
class PendaftarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        {
            return [
                'nama' => $this->faker->name(),
                'nik' => $this->faker->unique()->nik(),
                'no_hp' => $this->faker->phoneNumber(),
                'alamat' => $this->faker->address(),
                'tanggal_lahir' => $this->faker->date(),
                'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            ];
        }
    }
}