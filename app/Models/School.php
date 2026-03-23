<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = [
        'id',
        'name',
        'region',
        'city',
        'address',
        'director_name',
        'phone',
        'created_at',
        'updated_at'
        ];

}
