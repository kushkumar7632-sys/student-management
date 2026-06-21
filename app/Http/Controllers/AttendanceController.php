<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function create(){
        $students = Student::all();

        return view('attendance.create', compact('students'));
    }

    public function store(Request $request)
    {
        foreach($request->status as $studentId => $status)
            {
                Attendance::create([
                    'student_id' => $studentId,
                    'date' => $request->date,
                    'status' => $status
                ]);
            }
            return redirect()->route('attendance.index');
    }

    public function index()
    {
        $attendances = Attendance::with('student')->get();

        return view('attendance.index', compact('attendances'));
    }
}
