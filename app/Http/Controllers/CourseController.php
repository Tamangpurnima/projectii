<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Course');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new Course;
        $course->name=$request->get('name');
        $course->fullname=$request->get('fullname');
        $course->save();


        return redirect()->route('course.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $courses=Course::all();
        return view('CourseShow',['courses'=>$courses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course, $id)
    {
        $course=Course::find($id);
        return view('CourseEdit', ['course'=>$course]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, $id)
    {
        $course=Course::find($id);
        $course->name=$request->get('name');
        $course->fullname=$request->get('fullname');
        $course->save();

        return redirect('course/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course, $id)
    {
        $courses=Course::find($id);
        $courses->delete();
        return redirect('course/show');
    }
}
