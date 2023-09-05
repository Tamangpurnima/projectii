<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Qualification');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qualification=new Qualification;
        $qualification->id=$request->get('id');
        $qualification->user_id=$request->get('userid');
        $qualification->passed_year=$request->get('passedyear');
        $qualification->education_institution=$request->get('education_institution');
        $qualification->gpa=$request->get('gpa');
        $qualification->save();

        echo"<h1> Data send successfully.......</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        $qualifications=Qualification::all();
        return view('QualificationShow',['qualifications'=>$qualifications]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification, $id)
    {
        $qualification=Qualification::find($id);
        return view('QualificationEdit', ['qualification'=>$qualification]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qualification $qualification, $id)
    {
        $qualification=Qualification::find($id);
        $qualification->delete();
        return redirect('qualification/show');
    }
}
