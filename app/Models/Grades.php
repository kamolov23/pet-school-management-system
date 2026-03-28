<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $fillable = [
        'id',
        'student_id',
        'subject_id',
        'teacher_id',
        'grade',
        'date',
        'comment',
        'created_at',
        'updated_at',
    ];
}
