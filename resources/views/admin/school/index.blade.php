@extends('admin.layouts.app')
   
@section('main-content')

    <div class="page-title">
      <div class="title_left">
        <h3>Schools | <small>Registered schools</small></h3>
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
            <form action="{{route('myschool.store')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Select District</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control" id="district_id" name="district_id">
                    @foreach ($district as $district)
                      <option value="{{$district->district_id}}">{{$district->name_en}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">School Name</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-control" placeholder="School Name" id="name" name="name">
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
                          <th>District</th>
                          {{-- <th>Provine</th> --}}
                          {{-- <th>Educational Zone</th> --}}
                          <th>School name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- @foreach ($myschool as $myschool)
                        <tr>
                          <th scope="row">{{$myschool->id}}</th>
                          <td>{{$myschool->name_en}}</td>
                          <td>{{$myschool->name}}</td>
                          <td style="display:flex">
                            <a href="{{route('school.edit', $myschool->id)}}" class="btn btn-warning btn-xs">Edit</a>
                            <form action="{{route('school.destroy', $myschool->id)}}" method="POST" style="display:inline-block;">
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