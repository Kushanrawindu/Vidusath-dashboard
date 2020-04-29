<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MySchool;
use App\Grade;

class GradeController extends Controller
{
    public function index()
    {
        // $my_schools = MySchool::where("school_id", $id)->get('name');
        // return view('frontend.grade.index', compact('my_schools'));
    }
}
