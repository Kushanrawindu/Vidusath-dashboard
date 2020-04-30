@extends('admin.layouts.app')
   
@section('main-content')

<div class="page-title">
    <div class="title_left">
        <h3>Grade | <small>Manage Grades</small></h3>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Grade</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form action="{{route('grades.store')}}" method="POST" class="form-horizontal form-label-left">
                {{ csrf_field() }}
                {{-- <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">School_Id</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="demo1 form-control" value="" id="school_id" name="school_id"/>
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Grade</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="demo1 form-control" value="" id="grade" name="grade"/>
                    </div>
                </div>

                <div class="ln_solid"></div>
  
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
    
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Class</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <br />
            <form action="{{route('classes.store')}}" method="POST" class="form-horizontal form-label-left">
                {{ csrf_field() }}
  
                {{-- <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">School_Id</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="demo1 form-control" value="" id="school_id" name="school_id"/>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Grade_Id</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="demo1 form-control" value="" id="grade_id" name="grade_id"/>
                    </div>
                </div> --}}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Class</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="demo1 form-control" value="" id="class" name="class"/>
                    </div>
                </div>

                <div class="ln_solid"></div>
  
                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>School_id</th> --}}
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach ($grades as $grades)
                    <tr>
                      <th scope="row">{{$grades->id}}</th>
                      <td>{{$grades->grade}}</td>
                      <td style="display:flex">
                        <a href="{{route('grades.edit', $grades->id)}}" class="btn btn-warning btn-xs">Edit</a>
                        <form action="{{route('grades.destroy', $grades->id)}}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs" >Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            {{-- <th>School_id</th>
                            <th>Grade_id</th> --}}
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($classes as $classes)
                        <tr>
                          <th scope="row">{{$classes->id}}</th>
                          <td>{{$classes->class}}</td>
                          <td style="display:flex">
                            <a href="{{route('classes.edit', $classes->id)}}" class="btn btn-warning btn-xs">Edit</a>
                            <form action="{{route('classes.destroy', $classes->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs" >Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection