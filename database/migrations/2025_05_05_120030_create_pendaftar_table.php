<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Database\Seeders\PendaftarSeeder;

class CreatependaftarTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id(); // ID primary key
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('telepon');
            $table->decimal('bb', 5, 2); // berat badan, misalnya max 999.99 kg
            $table->decimal('tb', 5, 2); // tinggi badan, misalnya max 999.99 cm
            $table->string('bpjs_id')->unique();
            // Jika tidak ingin timestamps:
            // $table->timestamps();
        });
        $this->callSeeder();
        
    }

    private function callSeeder(): void
    {
        // Jalankan seeder secara manual
        (new PendaftarSeeder)->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftar');
    }
};
