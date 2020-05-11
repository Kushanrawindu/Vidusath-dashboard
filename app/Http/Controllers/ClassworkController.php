<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\Classwork;
use App\Grades;
use App\Classes;
use App\Subject;
use DB;

class ClassworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
        $grades = Grades::all();
        $classwork = Classwork::all();
        return view('user.classwork.index',compact('classwork','grades','classes'));
    }

    //this is for filter subjects
    // public function getLession(Request $request)
    // {
    //     $subjects = Subject::where('grade_id','=',$request->input('grade'))->where('class_id','=',$request->input('class'))->get();

    //     $html = '';


    //     foreach($subjects as $subject){
        

    //         $html .=    "<option value='".$subject->subject."'>".$subject->subject."</option>";
            
    //     }
    //     return response()->json(['html' => $html]);
    // }

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
            'school'=>'required',
            'teacher'=>'required',
            'subject'=>'required',
            'grade'=>'required',
            'class'=>'required',
            'title'=>'required',
            'description'=>'required',
            'date'=>'required',
            'time'=>'required',
            'file'=>'required',
            'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'option'=>'required'
        ]);

        //handle file upload
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/image', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        }

        $classwork = new Classwork();
        $classwork->school = $request->school;
        $classwork->teacher = $request->teacher;
        $classwork->subject = $request->subject;
        $classwork->grade = $request->grade;
        $classwork->class = $request->class;
        $classwork->title = $request->title;
        $classwork->description = $request->description;
        $classwork->date = $request->date;
        $classwork->time = $request->time;
        $classwork->file = $fileNameToStore;
        $classwork->option = $request->option;
        $classwork->save();
        // dd($request->all());
        return redirect(route('classwork.index'));
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
        $classwork = Classwork::find($id);
        $classwork->delete();
        return redirect(route('classwork.index'))->with('success', 'Successfully Deleted');
    }
}
