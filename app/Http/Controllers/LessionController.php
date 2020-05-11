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
        $classworks = Classwork::where('school','=',$request->input('school'))->where('grade_id','=',$request->input('grade'))->where('class_id','=',$request->input('class'))->get();

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
