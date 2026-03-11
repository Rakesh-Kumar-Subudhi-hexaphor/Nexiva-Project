<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'icon', 'image', 'meta_title', 'meta_desc', 'short_desc'];
}
