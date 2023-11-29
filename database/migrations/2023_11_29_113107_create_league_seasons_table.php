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
        Schema::create('league_seasons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->nullable()->constrained();
            $table->string('year')->nullable();
            $table->string('start')->nullable();
            $table->string('end')->nullable();
            $table->boolean('current')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('league_seasons');
    }
};
