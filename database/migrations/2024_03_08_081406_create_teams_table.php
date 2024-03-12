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
            $table->increments('team_id');
            $table->string('team_name')->unique();
            $table->unsignedInteger('coach_id');
            $table->unsignedInteger('player_id');
            $table->foreign('coach_id')->references('coach_id')->on('coaches')->onDelete('cascade');
            $table->foreign('player_id')->references('player_id')->on('players')->onDelete('cascade');
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
