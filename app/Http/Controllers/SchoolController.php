<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MySchool;
use App\District;
use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $schools = MySchool::all();
        $districts = District::all();
        return view('admin.school.index',compact('schools','districts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'district_id'=>'required',
            'name'=>'required'
        ]);

        $school = new School();
        $school->district_id = $request->district_id;
        $school->name = $request->name;
        $school->save();
        return redirect(route('school.index'));
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school = School::find($id);
        return view('admin.school.index')->with('school', $school);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'newdistrict'=>'required',
            'newname'=>'required'
        ]);

        $school = School::findOrFail($id);
        $school->district = $request->newdistrict;
        $school->name = $request->newname;
        $school->update();
        
        return redirect(route('school.index'))->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $school = School::find($id);
        $school->delete();
        return redirect(route('school.index'))->with('success', 'Successfully Deleted');
    }
}
