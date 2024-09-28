<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nourriture extends Model
{
    use HasFactory;

    protected $fillable = [
        'aliment',
        'animal_id',
    ];

    public function repas()
    {
        return $this->hasMany(RepasAnimal::class);
    }

    public function animaux()
    {
        return $this->belongsToMany(Animal::class, 'animal_nourriture');
    }
}
