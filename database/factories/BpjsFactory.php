<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bpjs>
 */
class BpjsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pendaftar_id' => Pendaftar::factory(), // Membuat pendaftar baru jika belum ada
            'nomor_bpjs' => $this->faker->unique()->numerify('000###########'),
            'kelas_rawat' => $this->faker->randomElement(['Kelas I', 'Kelas II', 'Kelas III']),
            'faskes_rujukan' => $this->faker->company(),
            'diagnosa' => $this->faker->sentence(3),
            'catatan' => $this->faker->sentence(6),
        ];
    }
}