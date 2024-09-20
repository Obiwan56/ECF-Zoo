<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NourritureAnimaux extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'nourriture',
        'quantite',
        'animal_id',
    ];

    // Relation avec le modèle Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
