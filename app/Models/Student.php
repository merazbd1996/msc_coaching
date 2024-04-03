<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'fathers_name',
        'mothers_name',
        'schools_name',
        'class',
        'group',
        'salary_structured',
        'admission_date',
        'salary_due',
        'picture',
    ];

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
