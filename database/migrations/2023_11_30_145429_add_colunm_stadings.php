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
            $table->integer('point_home')->default(0);
            $table->integer('point_away')->default(0);
            $table->string('goal_diff_home')->nullable();
            $table->string('goal_diff_away')->nullable();
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
