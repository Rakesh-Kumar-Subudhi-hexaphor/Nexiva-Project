<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'image', 'service', 'url', 'client', 'date', 'short_desc', 'description'];
    
     protected $casts = [
        'service' => 'array'
    ];
}
