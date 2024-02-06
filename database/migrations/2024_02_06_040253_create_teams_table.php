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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->string('kota')->unique();
            $table->unsignedInteger('menang')->default(0);
            $table->unsignedInteger('seri')->default(0);
            $table->unsignedInteger('kalah')->default(0);
            $table->unsignedInteger('goal_menang')->default(0);
            $table->unsignedInteger('goal_kalah')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
