<?php

namespace App\Http\Controllers;

use App\Models\CourseDetail;
use Illuminate\Http\Request;

class CourseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CourseDetail');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coursedetail=new CourseDetail;
        $coursedetail->id=$request->get('id');
        $coursedetail->college_id=$request->get('collegeid');
        $coursedetail->course_id=$request->get('courseid');
        $coursedetail->description=$request->get('description');
        $coursedetail->save();


        return redirect()->route('coursedetail.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CourseDetail $courseDetail)
    {
        $coursedetails=CourseDetail::all();
        return view('CourseDetailShow',['coursedetails'=>$coursedetails]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseDetail $courseDetail, $id)
    {
        
        $coursedetail=CourseDetail::find($id);
        return view('CourseDetailEdit', ['coursedetail'=>$coursedetail]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseDetail $courseDetail, $id)
    {
        $coursedetail=CourseDetail::find($id);
        $coursedetail->id=$id;
        $coursedetail->college_id=$request->get('college_id');
        $coursedetail->course_id=$request->get('course_id');
        $coursedetail->description=$request->get('description');
    

        $coursedetail->save();

        return redirect('coursedetail/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseDetail  $courseDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseDetail $courseDetail, $id)
    {
        $coursedetail=CourseDetail::find($id);
        $coursedetail->delete();
        return redirect('coursedetail/show');
    }
}
