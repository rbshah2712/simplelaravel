<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialSlide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'testi_image',
        'testi_desc',
    ];
}
