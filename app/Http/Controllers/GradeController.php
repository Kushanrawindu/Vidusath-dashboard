<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MySchool;
use App\Grades;

class GradeController extends Controller
{
    public function index()
    {
        // $my_schools = MySchool::where("school_id", $id)->get('name');
        // return view('frontend.grade.index', compact('my_schools'));

        $grades = Grades::all();
        return view('admin.grades.index',compact('grades'));
        // ->with('grades',$grades);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'grade'=>'required'
        ]);

        $grades = new Grades();
        $grades->grade = $request->grade;
        $grades->save();
        return redirect(route('grades.index'));
    }

    public function destroy($id)
    {
        $grades =  Grades::find($id);
        $grades->delete();
        return redirect(route('grades.index'))->with('success', 'Successfully Deleted');
    }
}
