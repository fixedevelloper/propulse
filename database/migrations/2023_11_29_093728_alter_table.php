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
            $table->string('group')->nullable()->change();
            $table->integer('rank')->default(0)->change();
            $table->integer('points')->default(0)->change();
            $table->integer('goal_diff')->default(0)->change();
            $table->string('form')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->integer('home_played')->default(0)->change();
            $table->integer('home_win')->default(0)->change();
            $table->integer('home_lost')->default(0)->change();
            $table->integer('home_draw')->default(0)->change();
            $table->integer('home_goal_for')->default(0)->change();
            $table->integer('home_goal_against')->default(0)->change();
            $table->date('update_round')->nullable()->change();
            $table->integer('away_played')->default(0)->change();
            $table->integer('away_win')->default(0)->change();
            $table->integer('away_lost')->default(0)->change();
            $table->integer('away_draw')->default(0)->change();
            $table->integer('away_goal_for')->default(0)->change();
            $table->integer('away_goal_against')->default(0)->change();
        });
        Schema::table('odds', function (Blueprint $table) {
            $table->string('mt_win_home')->nullable()->change();
            $table->string('mt_win_away')->nullable()->change();//match win away
            $table->string('mt_draw')->nullable()->change();
            $table->string('s_half_win_home')->nullable()->change();
            $table->string('s_half_win_away')->nullable()->change();//secon win away
            $table->string('s_half_draw')->nullable()->change();
            $table->string('f_half_win_home')->nullable()->change();
            $table->string('f_half_win_away')->nullable()->change();//secon win away
            $table->string('f_half_draw')->nullable()->change();
            $table->string('goal_over3_5')->nullable()->change();
            $table->string('goal_over0_5')->nullable()->change();
            $table->string('goal_over1_5')->nullable()->change();
            $table->string('goal_over2_5')->nullable()->change();
            $table->string('goal_under3_5')->nullable()->change();
            $table->string('goal_under0_5')->nullable()->change();
            $table->string('goal_under1_5')->nullable()->change();
            $table->string('goal_under2_5')->nullable()->change();
            $table->string('both_score_yes')->nullable()->change();
            $table->string('both_score_no')->nullable()->change();
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
