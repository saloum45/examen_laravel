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
        Schema::create("promoteurs", function (Blueprint $table) {
            $table->id();
            $table->string("nomp");
            $table->bigInteger("tel");
            $table->string("email");
            $table->string("bp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("promoteurs");
    }
};
