<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CollegeAdd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $college=new College;
        $college->name=$request->get('name');
        $college->address=$request->get('address');
        $college->phone=$request->get('phone');
        $college->password=$request->get('password');
        $college->description=$request->get('description');
        $college->image=$request->get('image');
        $college->save();
        return redirect()->route('college.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function show(College $college)
    {
        $colleges=College::all();
        return view('CollegeShow',['colleges'=>$colleges]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function edit(College $college, $id)
    {
        $college=College::find($id);
        return view('CollegeEdit', ['college'=>$college]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, College $college,$id)
    {
        $college=College::find($id);
        $college->name=$request->get('name');
        $college->address=$request->get('address');
        $college->phone=$request->get('phone');
        $college->password=$request->get('password');
        $college->description=$request->get('description');
        $college->image=$request->get('image');

        $college->save();

        return redirect('college/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\College  $college
     * @return \Illuminate\Http\Response
     */
    public function destroy(College $college, $id)
    {
        $colleges=College::find($id);
        $colleges->delete();
        return redirect('college/show');
    }
}
