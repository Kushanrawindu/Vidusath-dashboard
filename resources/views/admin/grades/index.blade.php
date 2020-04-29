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
            <form class="form-horizontal form-label-left">
  
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
            <form class="form-horizontal form-label-left">
  
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
@endsection