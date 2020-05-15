<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grades;
use App\Classes;
use App\Subject;
use App\Lession;
use App\Classwork;
use App\MySchool;

class UserGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grades::all();
        $classes = Classes::all();
        //dd($grades);
        return view('frontend.gradeSubject.index', compact('grades', 'classes'));
    }

    public function getData($id)
    {
        
        $data = MySchool::where('id','=', $id)->first();
        return view('frontend.gradeSubject.index', compact('data'));
    }

    public function getSubject(Request $request)
    {
        $subjects = Subject::where('grade_id','=',$request->input('grade'))->where('class_id','=',$request->input('class'))->get();

        $html = '';

        foreach($subjects as $subject){
        

            $html .=    "<div id='lnkViews' data-tagid='".$subject->id."' class='col-sm-3 inline p-2 ml-5  mb-3  purplebgsub'>";
            $html .=    "<img src='".asset('user/gradeSubject/img/book%20ico.png')."' class='float-left inline' width='30px'>";
            $html .=      "<a  class='float-right inline mr-2 bluetext subtext sbjID'  data-subject_id='".$subject->id."'>".$subject->subject."</a>";        //href='".route('usergrade.loadLession')."'
            $html .=   "</div>";
        }

        return response()->json(['html' => $html]);
    }


    // load lessions
    public function loadLession(Request $request)
    {
        $classworks = Classwork::where('school','=',$request->input('school'))->where('subject','=',$request->input('subject'))->get();             //->where('grade','=',$request->input('grade'))->where('class','=',$request->input('class'))

        $html = '';

        foreach($classworks as $classwork){
        

            $html .=    "<div id='lessonViews' data-tagid='".$classwork->id."' class='col-sm-3 inline p-2 ml-5  mb-3  purplebgsub'>";                 //id='lnkViews' data-tagid='".$subject->id."'
            $html .=    "<img src='".asset('user/gradeSubject/img/book%20ico.png')."' class='float-left inline' width='30px'>";
            $html .=      "<a class='float-right inline mr-2 bluetext subtext'>".$classwork->title."</a>";
            $html .=   "</div>";
        }

        return response()->json(['html' => $html]);
    }

    //view subject content
    public function getContent(Request $request)
    {
            $lesson = Classwork::findOrFail($request->input('id'));

            $html =    "<div id='lessonViews' data-tagid='".$lesson->description."' class='col-sm-3 inline p-2 ml-5  mb-3  purplebgsub'>";
            //$html .=    "<img src='".asset('user/gradeSubject/img/book%20ico.png')."' class='float-left inline' width='30px'>";
            $html .=      "<a class='float-right inline mr-2 bluetext subtext'>".$lesson->description."</a>";
            $html .=   "</div>";
        

        return response()->json(['html' => $html]);
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
        //
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
        //
    }
}
