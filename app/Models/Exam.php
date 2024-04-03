<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'student_id',
        'exam_name',
        'exam_total_mark',
        'obtained_mark',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
