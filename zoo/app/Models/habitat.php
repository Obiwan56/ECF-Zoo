<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'img1',
        'img2',
        'img3',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
