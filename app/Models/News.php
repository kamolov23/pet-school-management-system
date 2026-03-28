<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =[
         'id',
         'school_id',
         'title',
         'content',
         'image',
         'published_at',
         'created_at',
         'updated_at',
    ];
}
