<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    // Lecture 04/05
    protected $fillable = ['name', 'cuisine_id'];

    //------
    public function cuisine() 
    {
        return $this->belongsTo(Cuisine::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
