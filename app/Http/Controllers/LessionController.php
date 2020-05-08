<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessionController extends Controller
{
    public function index()
    {
        return view('frontend.lession.index');
    }
}
