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
        Schema::create('ratio_fixtures', function (Blueprint $table) {
            $table->id();
            $table->string("ratio_a_b_for")->nullable();
            $table->string("ratio_a_b_against")->nullable();
            $table->integer("fixture_id");
            $table->string("percent")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratio_fixtures');
    }
};
