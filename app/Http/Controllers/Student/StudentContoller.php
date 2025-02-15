<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentContoller extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('student/students', [
            'user' => $students,
        ]);

        // foreach ($students as $student) {
        // dd($student->name);
        // }
    }
}
