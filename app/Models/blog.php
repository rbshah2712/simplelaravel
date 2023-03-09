<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blogcategory_id',
        'title',
        'description',
        'image',
        'page_count',
    ];

    public function category(){
        return $this->belongsTo(blogcategory::class,'blogcategory_id','id');
    }
}
