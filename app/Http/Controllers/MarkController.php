<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\course;
use App\Models\Mark;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = Mark::with('student','course')->get();

        return view('marks.index', compact('marks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();

        return view('marks.create', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->marks >= 90){
            $grade = 'A';
        }
        elseif($request->marks >= 75){
            $grade = 'B';
        }
        elseif($request->marks >= 60){
            $grade = 'C';
        }
        elseif($request->marks >= 40){
            $grade = 'D';
        }
        else{
            $grade = 'F';
        }

        Mark::create([
            'student_id' => $request->student_id,
            'course_id' => $request->course_id,
            'marks' => $request->marks,
            'grade' => $grade,
        ]);
        return redirect('/marks');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
