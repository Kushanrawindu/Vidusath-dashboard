@extends('admin.layouts.app')
   
@section('main-content')

<div class="page-title">
    <div class="title_left">
      <h3>Subjects | <small>Manage Subjects</small></h3>
    </div>
    <div class="title_right">
      <div class="col-md-4 col-sm-2 col-xs-12 form-group pull-right top_search"></div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
          {{-- <br /> --}}
          <form action="{{route('subjects.store')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grade</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id="grade_id" name="grade_id">
                  <option>Select Grade</option>
                  <?php $grades = \App\Grades::all(); ?>
                      @foreach($grades as $grade)
                        <option value="{{$grade->grade}}">{{$grade->grade}}</option>
                      @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grade</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id="class_id" name="class_id">
                  <option>Select Class</option>
                  <?php $classes = \App\Classes::all(); ?>
                      @foreach($classes as $class)
                        <option value="{{$class->class}}">{{$class->class}}</option>
                      @endforeach
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" class="form-control" placeholder="Add Subject" id="subject" name="subject">
              </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button class="btn btn-primary" type="reset">Reset</button>
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
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Grade</th>
                          <th>Class</th>
                          <th>Subject</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($subjects as $subjects)
                        <tr>
                          <th scope="row">{{$subjects->id}}</th>
                          <td>{{$subjects->grade_id}}</td>
                          <td>{{$subjects->class_id}}</td>
                          <td>{{$subjects->subject}}</td>
                          {{-- <td style="display:flex">
                            <a href="{{route('myschool.edit', $myschool->id)}}" class="btn btn-warning btn-xs">Edit</a>
                            <form action="{{route('myschool.destroy', $myschool->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs" >Delete</button>
                            </form>
                          </td> --}}
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection