<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubjectResource;
use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
{
    public function index()
    {
        return SubjectResource::collection( Subject::all());
    }
}
