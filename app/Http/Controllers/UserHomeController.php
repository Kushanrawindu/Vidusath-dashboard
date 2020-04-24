<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserHome;
use App\School;

class UserHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::all();
        // dd($schools);

        return view('frontend.homepage', compact('schools'));
    }
}
