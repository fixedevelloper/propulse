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
        Schema::table('odd_days', function (Blueprint $table) {
            $table->string('h1')->default('-')->change();
            $table->string('h2')->default('-')->change();
            $table->string('h3')->default('-')->change();
            $table->string('h4')->default('-')->change();
            $table->string('h5')->default('-')->change();
            $table->string('h6')->default('-')->change();
            $table->string('a1')->default('-')->change();
            $table->string('a2')->default('-')->change();
            $table->string('a3')->default('-')->change();
            $table->string('a4')->default('-')->change();
            $table->string('a5')->default('-')->change();
            $table->string('a6')->default('-')->change();
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
