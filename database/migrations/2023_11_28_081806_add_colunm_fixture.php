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
        Schema::table('fixtures', function (Blueprint $table) {
           // $table->foreign('team_home_id')->references('team_id')->on('teams');
           // $table->foreign('team_away_id')->references('team_id')->on('teams');
            $table->string('day_timestamp')->nullable();
        });
        Schema::table('stadings', function (Blueprint $table) {
            //$table->foreign('league_id')->references('league_id')->on('leagues');
            //$table->foreign('team_id')->references('team_id')->on('teams');
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
