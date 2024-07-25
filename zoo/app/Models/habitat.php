<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    protected $guarded = [];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
