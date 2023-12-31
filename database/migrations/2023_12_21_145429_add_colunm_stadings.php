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
            $table->integer('goal_home_against')->nullable()->default(0)->change();
            $table->integer('goal_away_against')->nullable()->default(0)->change();
            $table->integer('goal_home_for')->nullable()->default(0)->change();
            $table->integer('goal_away_for')->nullable()->default(0)->change();
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
