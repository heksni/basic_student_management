<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::latest()->simplePaginate(6);


        return view('students.index',['students'=> $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $studentAttr =   $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required']
        ]);

        Student::create($studentAttr);

        // $students = Student::simplePaginate(6);

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $student = Student::findOrFail($student->id);

        return view('students.edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id = null )
    {
        $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required']
        ]);

        $student = Student::findOrFail($id);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'mobile' => $request->mobile,
        ]);

        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);

        DB::statement("ALTER TABLE students AUTO_INCREMENT = 1");

        return redirect('/students')->with('flash_message','Student deleted!');
    }
}
