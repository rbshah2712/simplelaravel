<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_desc',
        'about_image',
    ];
}
