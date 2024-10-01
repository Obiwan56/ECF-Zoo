<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    protected $fillable = [
        'race',
        'prenom',
        'etat',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'habitat_id'
    ];
    public function repas()
    {
        return $this->hasMany(RepasAnimal::class);
    }


    public function nourritures()
    {
        return $this->belongsToMany(Nourriture::class, 'animal_nourriture');
    }


    public function habitat()
    {
        return $this->belongsTo(Habitat::class);
    }
}
