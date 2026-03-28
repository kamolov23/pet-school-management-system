<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $fillable = [
          'id',
          'class_id',
          'subject_id',
          'teacher_id',
          'day_of _week',
          'lesson_number',
          'start_time',
          'end_time',
          'created_at',
          'updated_at'
    ];
}
