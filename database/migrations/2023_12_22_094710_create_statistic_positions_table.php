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
        Schema::create('statistic_positions', function (Blueprint $table) {
            $table->id();
            $table->integer('fixture_id');
            $table->string('position')->nullable();
            $table->string('date_timestamp')->nullable();
            $table->timestamp('datetime_timestamp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistic_positions');
    }
};
