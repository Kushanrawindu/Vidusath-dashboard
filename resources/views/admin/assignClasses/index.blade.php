@extends('admin.layouts.app')
   
@section('main-content')
<form action="{{route('assignclass.store')}}" method="POST" class="form-horizontal form-label-left">
    {{ csrf_field() }}
<div class="page-title">
    <div class="title_left">
        <button id="button" class="btn btn-success" type="submit">Submit Form</button>
    </div>
</div>

<div class="clearfix"></div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select School</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <select class="form-control" id="name" name="name">
          <option>Select the School</option>
        @foreach ($myschools as $my_school)
          <option value="{{$my_school->id}}">{{$my_school->name}}</option>
        @endforeach 
      </select>
    </div>
</div>

<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Grade</th>
            <th>Class</th>
            {{-- <th>Action</th> --}}
        </tr>
    </thead>
    <tbody>
       
        @for($i=1; $i < 9; $i++)
        <tr>
            <td>{{$i}}</td>
            <td>
                <select size="1" id="row-1-office" name="row_{{$i}}_grade">
                    <option>Select the Grade</option>
                    @foreach($grades as $grade)
                        <option value="{{$grade->grade}}">{{$grade->grade}}</option>
                    @endforeach
                </select>
            </td>
            <td>
                <select size="1" id="row-1-office" name="row_{{$i}}_class">
                    <option>Select the Class</option>
                    @foreach ($classes as $class)
                        <option value="{{$class->class}}">{{$class->class}}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        @endfor
    </tbody>
</table>
</form>
@endsection