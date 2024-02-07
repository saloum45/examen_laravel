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
        Schema::create("ligne_promoteurs", function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("terrain_id");
            $table->foreign("terrain_id")->references("id")->on("terrains");
            $table->unsignedBigInteger("promoteur_id");
            $table->foreign("promoteur_id")->references("id")->on("promoteurs");
            $table->date("dateDebut");
            $table->date("dateFin");
            $table->bigInteger("prix");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("ligne_promoteurs");
    }
};
