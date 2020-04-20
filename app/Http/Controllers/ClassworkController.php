<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classwork;

class ClassworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classwork = Classwork::all();
        return view('user.classwork.index')->with('classwork',$classwork);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject'=>'required',
            'class'=>'required',
            'date'=>'required',
            'time'=>'required',
            'file'=>'required',
            'option'=>'required'
        ]);

        //handle file upload
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' .time().'.'.$extension;
            $path = $request->file('file')->storeAs('public/image', $fileNameToStore);
        }
        else {
            $fileNameToStore = 'noImage.jpg';
        }

        $classwork = new Classwork();
        $classwork->subject = $request->subject;
        $classwork->class = $request->class;
        $classwork->date = $request->date;
        $classwork->time = $request->time;
        $classwork->file = $request->file;
        $classwork->option = $request->option;
        $classwork->save();
        return redirect(route('classwork.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classwork = Classwork::find($id);
        $classwork->delete();
        return redirect(route('classwork.index'))->with('success', 'Successfully Deleted');
    }
}
