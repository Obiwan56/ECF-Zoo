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
        Schema::create('nourriture_animauxes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nourriture');
            $table->integer('quantite');
            $table->foreignId('animal_id')->constrained('animals')->onDelete('cascade');  // Clé étrangère vers animals

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nourriture_animauxes');
    }
};
