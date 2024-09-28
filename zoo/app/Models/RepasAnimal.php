<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepasAnimal extends Model
{
    protected $fillable = [
        'quantite',
        'observation',
        'date',
        'animal_id',
        'nourriture_id',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    public function nourritures()
    {
        return $this->hasMany(Nourriture::class);
    }
}
