<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::latest()->simplePaginate(6);

        return view('teachers.index',['teachers' => $teachers]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacAttr = $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required'],
        ]);

        Teacher::create($teacAttr);


        return redirect('teachers');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        
       return view('teachers.edit',['teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacAttr = $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'mobile' => ['required'],
        ]);

        Teacher::findOrFail($teacher->id)->update($teacAttr);

        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->destroy($teacher->id);

        return redirect('teachers');
    }
}
