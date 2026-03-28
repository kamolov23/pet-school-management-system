<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'subject_id',
        'date',
        'status',
        'comment',
        'created_at',
        'updated_at',
    ];
}
