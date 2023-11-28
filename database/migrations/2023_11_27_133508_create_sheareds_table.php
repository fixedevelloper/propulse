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
        Schema::create('sheareds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fixture_id')->constrained();
            $table->float('pourcentage')->default(0.0);
            $table->string('critere')->nullable();
            $table->string('status')->default("PENDING");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheareds');
    }
};
