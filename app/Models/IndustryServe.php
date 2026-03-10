<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryServe extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'icon', 'description', 'tags', 'image', 'short_desc'];
}
