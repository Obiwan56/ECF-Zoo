<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class AnimalVote extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'animal_votes';

    protected $fillable = ['name', 'race', 'photo', 'votes'];
}




