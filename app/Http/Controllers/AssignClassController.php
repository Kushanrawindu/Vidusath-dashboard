<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MySchool;
use App\Grades;
use App\Classes;
use App\AssignClass;

class AssignClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myschools = MySchool::all();
        $grades = Grades::all();
        $classes = Classes::all();
        return view('admin.assignClasses.index', compact('myschools', 'grades', 'classes'));
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
        for($i = 1; $i < 9; $i++){
            $class = new AssignClass();
            $class->schoolname = $request->name;
            $class->grade = $request->input("grade_".$i);
            $class->classname = $request->input("class_".$i);
            $class->save();
        }
<<<<<<< HEAD

        // return redirect(route('assignClasses.index'));
        
=======
>>>>>>> 927fab5ed2937d752e6af5dc378c1eb729fbdc43
    }

    /**
     * Display the specified resource.
     *
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
        //
    }
}
