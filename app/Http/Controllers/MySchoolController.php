<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\MySchool;

class MySchoolController extends Controller
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
        // $myschools = MySchool::all();
        // $district = District::all();
        
        // dd($myschools);
        //return view('admin.school.index',compact('myschools','district'));
        // ->with('my_school',$myschool);
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
            'name'=>'required',
            'district_id'=>'required'
        ]);

        $myschool = new MySchool();
        $myschool->name = $request->name;
        $myschool->district_id = $request->district_id;
        $myschool->save();
        return redirect(route('school.index'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myschool = MySchool::find($id);
        $myschool->delete();
        return redirect(route('school.index'))->with('success', 'Successfully Deleted');
    }
}
