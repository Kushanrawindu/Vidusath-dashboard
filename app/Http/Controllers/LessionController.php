<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classwork;
use DB;

class LessionController extends Controller
{
    public function index()
    {
        return view('frontend.lession.index');
    }

    public function loadLession(Request $request)
    {
        //$classworks = Classwork::where('school','=',$request->input('school'))->where('grade_id','=',$request->input('grade'))->where('class_id','=',$request->input('class'))->get();


        $classworks = DB::select("SELECT sch.name AS school
                , u.name AS teacher_name
                , s.subject
                , g.grade
                , c.class
                , title
                , description
                , date
                , time
                , file
                , cw.created_at
            FROM classworks AS cw
            INNER JOIN my_schools AS sch ON sch.id = cw.school
            INNER JOIN subjects AS s ON s.id = cw.subject
            INNER JOIN grades AS g ON g.id = cw.grade
            INNER JOIN classes AS c ON c.id = cw.class
            INNER JOIN users AS u ON u.id = cw.teacher AND u.is_admin = 0
            WHERE cw.school = 1 AND cw.subject = 25 AND cw.grade = 12 AND cw.class = 2");

        $html = '';

        foreach($classworks as $classwork){
        

            $html .=    "<div class='col-sm-3 inline p-2 ml-5  mb-3  purplebgsub'>";
            $html .=    "<img src='".asset('user/gradeSubject/img/book%20ico.png')."' class='float-left inline' width='30px'>";
            $html .=      "<a class='float-right inline mr-2 bluetext subtext' href='#'>".$classwork->title."</a>";
            $html .=   "</div>";
        }

        return response()->json(['html' => $html]);
    }
}
