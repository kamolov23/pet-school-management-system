<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'id',
         'user_id',
         'school_id',
         'first_name',
          'last_name',
          ' subject',
          'phone',
          'experience',
           'created_at',
            'updated_at'
    ];
}
