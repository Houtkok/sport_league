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
        Schema::create('players', function (Blueprint $table) {
            $table->unsignedInteger('player_id')->primary();
            $table->string('player_fname');
            $table->string('player_lname');
            $table->date('dob');
            $table->string('position');
            $table->unsignedInteger('national_id');
            $table->foreign('national_id')->references('national_id')->on('nationals')->onDelete('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
