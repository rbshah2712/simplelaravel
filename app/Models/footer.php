<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'copyright',
        'linkedin',
        'email',
        'phone',
        'title',
         'text',
         'address',
    ];
}
