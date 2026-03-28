<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $fillable = [
        'id',
        'school_id',
        'title',
        'image',
        'created_at',
        'updated_at',
    ];
}
