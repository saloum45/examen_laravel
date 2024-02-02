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
        Schema::create("terrains", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("superficie");
            $table->string("description");
            $table->unsignedBigInteger("idZone");
            $table->foreign("idZone")->references("id")->on("zones");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("terrains");
    }
};
