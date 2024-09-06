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
        'habitat_id'
    ];
    public function habitat()
    {
        return $this->belongsTo(Habitat::class);
    }
}
