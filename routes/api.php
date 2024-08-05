<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseEmployeeController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\CourseEmployee;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::apiResource('user', UserController::class);

    Route::apiResource('course', CourseController::class);

    Route::apiResource('employee', EmployeeController::class);

    Route::apiResource('course-employee', CourseEmployeeController::class);

});