@extends('user.layouts.app')
   
@section('main-content')
<div class="page-title">
    <div class="title_left">
        <h3>Classwork | <small>Manage Studies</small></h3>
    </div>
    <div class="title_right">
        <div class="col-md-4 col-sm-2 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
            <button id="compose" class="btn btn-sm btn-success btn-block" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Add New Classwork</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add New Classwork</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal form-label-left">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Subject</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="form-control">
                                        <option>English</option>
                                        <option>Sinhala</option>
                                        <option>Mathematics</option>
                                        <option>Buddhism</option>
                                        <option>Tamil</option>
                                        <option>Dancing</option>
                                        <option>Music</option>
                                        <option>Art</option>
                                        <option>Civics</option>
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Class</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="select2_group form-control">
                                        <optgroup label="Grade 6">
                                          <option value="AK">6-A</option>
                                          <option value="HI">6-B</option>
                                          <option value="HI">6-C</option>
                                          <option value="HI">6-D</option>
                                          <option value="HI">6-E</option>
                                          <option value="HI">6-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 7">
                                            <option value="AK">7-A</option>
                                            <option value="HI">7-B</option>
                                            <option value="HI">7-C</option>
                                            <option value="HI">7-D</option>
                                            <option value="HI">7-E</option>
                                            <option value="HI">7-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 8">
                                            <option value="AK">8-A</option>
                                            <option value="HI">8-B</option>
                                            <option value="HI">8-C</option>
                                            <option value="HI">8-D</option>
                                            <option value="HI">8-E</option>
                                            <option value="HI">8-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 9">
                                            <option value="AK">9-A</option>
                                            <option value="HI">9-B</option>
                                            <option value="HI">9-C</option>
                                            <option value="HI">9-D</option>
                                            <option value="HI">9-E</option>
                                            <option value="HI">9-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 10">
                                            <option value="AK">10-A</option>
                                            <option value="HI">10-B</option>
                                            <option value="HI">10-C</option>
                                            <option value="HI">10-D</option>
                                            <option value="HI">10-E</option>
                                            <option value="HI">10-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 11">
                                            <option value="AK">11-A</option>
                                            <option value="HI">11-B</option>
                                            <option value="HI">11-C</option>
                                            <option value="HI">11-D</option>
                                            <option value="HI">11-E</option>
                                            <option value="HI">11-F</option>
                                        </optgroup>
                                      </select>
                                    </div>
                                  </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Date</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Time</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class='input-group date' id='myDatepicker3'>
                                            <input type='text' class="form-control" />
                                            <span class="input-group-addon">
                                               <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select File</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <div class="btn-group">
                                        <a class="btn" id="pictureBtn"></a>
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose Option</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="form-control">
                                        <option>Class Work</option>
                                        <option>Home Work</option>
                                      </select>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
              </div>
        </div>
        </div>
    </div>
</div>
@endsection