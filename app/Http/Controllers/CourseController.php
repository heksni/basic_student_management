<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::simplePaginate(5);

        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'syllabus' => ['required'],
            'duration' => ['required'],
        ]);

        Course::create([
            'name' => $request->name,
            'syllabus' => json_encode($request->syllabus),
            'duration' => $request->duration,
        ]);

        return redirect('courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        
        $request->validate([
            'name' => ['required'],
            'syllabus' => ['required'],
            'duration' => ['required'],
        ]);

        Course::find($course->id)->update([
            'name' => $request->name,
            'syllabus' => json_encode($request->syllabus),
            'duration' => $request->duration,
        ]);

        return redirect('courses');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->destroy($course->id);

        return redirect('courses');
    }
}
