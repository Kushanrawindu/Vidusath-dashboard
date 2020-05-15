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


    public function getContent(Request $request)
    {
        $classworks = Classwork::where('school','=',$request->input('school'))->where('subject','=',$request->input('subject'))->get();             //->where('grade','=',$request->input('grade'))->where('class','=',$request->input('class'))->where('description','=',$request->input('description'))

        $html = '';

        //dd($request->all());
        foreach($classworks as $claswork){
        

            $html .=    "<div id='lessonViews' data-tagid='".$claswork->description."' class='col-sm-3 inline p-2 ml-5  mb-3  purplebgsub'>";
            //$html .=    "<img src='".asset('user/gradeSubject/img/book%20ico.png')."' class='float-left inline' width='30px'>";
            $html .=      "<a class='float-right inline mr-2 bluetext subtext'>".$claswork->description."</a>";
            $html .=   "</div>";
        }

        return response()->json(['html' => $html]);
    }
}
