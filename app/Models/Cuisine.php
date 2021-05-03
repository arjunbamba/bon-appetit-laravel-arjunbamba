<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;

    protected $fillable = ['cuisine'];

    public function recipes()
    {
        // recipes.cuisine_id is the foreign key column
        return $this->hasMany(Recipe::class);
    }
}
