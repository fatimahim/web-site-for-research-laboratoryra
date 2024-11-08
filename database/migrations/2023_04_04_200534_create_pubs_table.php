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
        Schema::create('pubs', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('nom');
            $table->string('prenom');
            $table->string('image');
            $table->string('anne');
            $table->string('auteur1');
            $table->string('auteur2');
            $table->string('journal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pubs');
    }
};
