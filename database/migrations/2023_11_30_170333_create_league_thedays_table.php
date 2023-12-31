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
        Schema::create('league_thedays', function (Blueprint $table) {
            $table->id();
            $table->integer('league_id')->nullable();
            $table->string('season')->nullable();
            $table->string('round')->nullable();
            $table->integer('timestamp')->nullable();
            $table->date('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('league_thedays');
    }
};
