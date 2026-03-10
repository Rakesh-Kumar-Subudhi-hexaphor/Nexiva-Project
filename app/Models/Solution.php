<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'icon', 'image', 'short_desc' ,'key_point'];
     protected $casts = [
        'key_point' => 'array'
    ];
}
