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
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('match_id');
            $table->string('match_name');
            $table->string('match_time');
            $table->unsignedInteger('stadium_id');
            $table->unsignedInteger('team_A');
            $table->unsignedInteger('team_B');
            $table->foreign('stadium_id')->references('stadium_id')->on('stadia')->onDelete('cascade');
            $table->foreign('team_A')->references('team_id')->on('teams')->onDelete('cascade');
            $table->foreign('team_B')->references('team_id')->on('teams')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
