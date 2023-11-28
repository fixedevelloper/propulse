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
        Schema::create('odds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fixture_id')->constrained();
            $table->foreignId('league_id');
            $table->string('mt_win_home');
            $table->string('mt_win_away');//match win away
            $table->string('mt_draw');
            $table->string('s_half_win_home');
            $table->string('s_half_win_away');//secon win away
            $table->string('s_half_draw');
            $table->string('f_half_win_home');
            $table->string('f_half_win_away');//secon win away
            $table->string('f_half_draw');
            $table->string('goal_over3_5');
            $table->string('goal_over0_5');
            $table->string('goal_over1_5');
            $table->string('goal_over2_5');
            $table->string('goal_under3_5');
            $table->string('goal_under0_5');
            $table->string('goal_under1_5');
            $table->string('goal_under2_5');
            $table->string('both_score_yes');
            $table->string('both_score_no');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odds');
    }
};
