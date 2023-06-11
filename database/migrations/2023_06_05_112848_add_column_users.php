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
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->unsignedBigInteger('artist_id')->nullable();
            $table->unsignedBigInteger('venue_id')->nullable();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('venue_id')->references('id')->on('venues');
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
