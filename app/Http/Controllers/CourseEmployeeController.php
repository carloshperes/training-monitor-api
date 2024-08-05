<?php

namespace App\Http\Controllers;

use App\Models\CourseEmployee;

class CourseEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'data'  => CourseEmployee::with('courses', 'employees')->paginate(15)
        ];
    }
}
