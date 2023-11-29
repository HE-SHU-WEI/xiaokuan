<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }
}
