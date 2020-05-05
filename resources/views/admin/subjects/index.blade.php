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
          <form action="#" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grade</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" id="district_id" name="district_id">
                  <option>Select Grade</option>
                  {{-- @foreach ($districts as $district)
                    <option value="{{$district->district_id}}">{{$district->name_en}}</option>
                  @endforeach --}}
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

@endsection