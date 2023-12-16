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
        Schema::table('stadings', function (Blueprint $table) {
            $table->integer('goal_home_against')->default(0);
            $table->integer('goal_away_against')->default(0);
            $table->integer('goal_home_for')->default(0);
            $table->integer('goal_away_for')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
