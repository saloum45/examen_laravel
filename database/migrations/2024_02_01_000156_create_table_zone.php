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
        Schema::create("zones", function (Blueprint $table) {
            $table->id();
            $table->string("nomz");
            $table->string("localisation");
            $table->string("description");
            $table->unsignedBigInteger("region_id");
            $table->foreign("region_id")->references("id")->on("regions");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zones');
    }
};
