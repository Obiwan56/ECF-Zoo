<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepasAnimal extends Model
{
    use HasFactory;

    protected $fillable = ['quantite', 'observation', 'date', 'animal_id', 'nourriture_id'];

    // Définir la relation avec le modèle Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    // Définir la relation avec le modèle Nourriture
    public function nourriture()
    {
        return $this->belongsTo(Nourriture::class);
    }
}
