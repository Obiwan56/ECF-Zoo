<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RapportVeto extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'detail', 'animal_id'];

    // Définir la relation avec le modèle Animal
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
