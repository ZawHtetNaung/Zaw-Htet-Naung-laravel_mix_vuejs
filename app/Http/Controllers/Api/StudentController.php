<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        return StudentResource::collection( Student::all());
    }
}
