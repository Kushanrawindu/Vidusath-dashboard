<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHome;
// use App\School;
use App\Grades;
use App\District;
use App\MySchool;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $schools = MySchool::all();
        $district = District::all();

        return view('frontend.homepage', compact('district'));
    }

    public function getSchool($id)
    {
        //$myID = MySchool::where('district_id', $id)->get("id");        
        $myschool = MySchool::where('district_id', $id)->get(['id','name']); 
        return json_encode($myschool);
        //dd($data->name);

    }

    // public function getData($id)
    // {
        
    //      $data = MySchool::where('id','=', $id)->first();
    //      return view('frontend.gradeSubject.index', compact('data'));
    // }
}
