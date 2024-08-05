<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseEmployee extends Model
{
    use HasFactory;

    protected $table    = 'course_employee';

    protected $fillable = [
        'course_id',
        'employee_id',
        'progress',
        'score'
    ];
 
    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
