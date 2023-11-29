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
            $table->integer('rank')->nullable()->default(0)->change();
            $table->integer('points')->nullable()->default(0)->change();
            $table->integer('goal_diff')->nullable()->default(0)->change();
            $table->string('form')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->integer('home_played')->nullable()->default(0)->change();
            $table->integer('home_win')->nullable()->default(0)->change();
            $table->integer('home_lost')->nullable()->default(0)->change();
            $table->integer('home_draw')->nullable()->default(0)->change();
            $table->integer('home_goal_for')->nullable()->default(0)->change();
            $table->integer('home_goal_against')->nullable()->default(0)->change();
            $table->date('update_round')->nullable()->change();
            $table->integer('away_played')->nullable()->default(0)->change();
            $table->integer('away_win')->nullable()->default(0)->change();
            $table->integer('away_lost')->nullable()->default(0)->change();
            $table->integer('away_draw')->nullable()->default(0)->change();
            $table->integer('away_goal_for')->nullable()->default(0)->change();
            $table->integer('away_goal_against')->nullable()->default(0)->change();
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
