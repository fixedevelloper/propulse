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
            $table->unsignedInteger('league_id')->nullable()->change();
            $table->unsignedInteger('team_id')->nullable()->change();
        });
        Schema::table('fixtures', function (Blueprint $table) {
            $table->unsignedInteger('team_home_id')->nullable()->change();
            $table->unsignedInteger('team_away_id')->nullable()->change();
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
