<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grades;
use App\Classes;
use App\MySchool;

class SchoolGradeClassController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        $grades = Grades::all();
        $my_schools = MySchool::all();
        return view('admin.assignClasses.index',compact('my_schools','grades','classes'));
    }
}
