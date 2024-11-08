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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(0);
            /* Users: 0=>doctorant, 1=>cheflabo, 2=>chefEquipe,3=>prof,4=>adjoint */            $table->string('nom');
            $table->string('Prénom');
            $table->string('email')->unique();
            $table->string('tél')->unique(); 
            $table->string('Grade');
            $table->string('Equipe');
            $table->string('Encadrant');
            $table->string('co-Encadrant')->nullable();
            $table->string('Cne');
            $table->string('Cin');
            $table->string('Etablissement');
            $table->string('image');
            
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_activated')->default(false);
            $table->string('activation_code')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
