<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHome;
use App\School;
use App\Grade;
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
        // dd($schools);

        return view('frontend.homepage', compact('district'));
    }

    public function getSchool($id)
    {
        //$myID = MySchool::where('district_id', $id)->get("id");        
        $myschool = MySchool::where('district_id', $id)->get(['id','name']); 
        return json_encode($myschool);

    }

    public function getData($id)
    {
        $data = Grade::where("school_id", $id)->get();
        return view('frontend.grade.index', compact('data'));
    }
}
