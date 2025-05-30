<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('b_p_j_s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        $this->callSeeder();
        
    }

    private function callSeeder(): void
    {
        // Jalankan seeder secara manual
        (new BpjsSeeder)->run();
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_p_j_s');
    }
};
