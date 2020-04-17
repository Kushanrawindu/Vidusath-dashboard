@extends('user.layouts.app')
   
@section('main-content')
<div class="page-title">
    <div class="title_left">
        <h3>Classwork | <small>Manage Studies</small></h3>
    </div>
    <div class="title_right">
        <div class="col-md-4 col-sm-2 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
            <button id="compose" class="btn btn-round btn-success" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Add New Classwork</button>
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
                                      <select class="select2_group form-control" id="subject" name="subject">
                                        <optgroup label="General">
                                            <option value="Buddhism">Buddhism</option>
                                            <option value="Science">Science</option>
                                            <option value="Sinhala">Sinhala Language</option>
                                            <option value="Mathematics">Mathematics</option>
                                            <option value="History">History</option>
                                            <option value="English">English Language</option>
                                            <option value="Tamil">Tamil Language</option>
                                        </optgroup>
                                        <optgroup label="Basket Subject 1">
                                            <option value="Civics">Life Skills & Citizenship Education</option>
                                            <option value="Business">Business Education</option>
                                            <option value="Geography">Geography</option>
                                            <option value="SinLit">Sinhala Literature</option>
                                            <option value="EnLit">English Literature</option>
                                        </optgroup>
                                        <optgroup label="Basket Subject 2">
                                            <option value="Buddhism">Art</option>
                                            <option value="Buddhism">Dancing</option>
                                            <option value="WMusic">Western Music</option>
                                            <option value="EMusic">Eastern Music</option>
                                            <option value="Drama">Drama & Theatre</option>
                                        </optgroup>
                                        <optgroup label="Basket Subject 3">
                                            <option value="Buddhism">Health & Physical Education</option>
                                            <option value="Tech">Practical & Technical Studies</option>
                                            <option value="Christianity">Christianity</option>
                                            <option value="Shivenary">Shivenary</option>
                                            <option value="Catholic">Catholic</option>
                                            <option value="Islam">Islam</option>
                                            <option value="IT">Information & Communication Technology</option>
                                            <option value="Agri">Agriculture & Food Technology</option>
                                        </optgroup>
                                      </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Class</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="select2_group form-control" id="class" name="class">
                                        <optgroup label="Grade 6">
                                          <option value="6A">6-A</option>
                                          <option value="6B">6-B</option>
                                          <option value="6C">6-C</option>
                                          <option value="6D">6-D</option>
                                          <option value="6E">6-E</option>
                                          <option value="6F">6-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 7">
                                            <option value="7A">7-A</option>
                                            <option value="7B">7-B</option>
                                            <option value="7C">7-C</option>
                                            <option value="7D">7-D</option>
                                            <option value="7E">7-E</option>
                                            <option value="7F">7-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 8">
                                            <option value="8A">8-A</option>
                                            <option value="8B">8-B</option>
                                            <option value="8C">8-C</option>
                                            <option value="8D">8-D</option>
                                            <option value="8E">8-E</option>
                                            <option value="8F">8-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 9">
                                            <option value="9A">9-A</option>
                                            <option value="9B">9-B</option>
                                            <option value="9C">9-C</option>
                                            <option value="9D">9-D</option>
                                            <option value="9E">9-E</option>
                                            <option value="9F">9-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 10">
                                            <option value="10A">10-A</option>
                                            <option value="10B">10-B</option>
                                            <option value="10C">10-C</option>
                                            <option value="10D">10-D</option>
                                            <option value="10E">10-E</option>
                                            <option value="10F">10-F</option>
                                        </optgroup>
                                        <optgroup label="Grade 11">
                                            <option value="11A">11-A</option>
                                            <option value="11B">11-B</option>
                                            <option value="11C">11-C</option>
                                            <option value="11D">11-D</option>
                                            <option value="11E">11-E</option>
                                            <option value="11F">11-F</option>
                                        </optgroup>
                                      </select>
                                    </div>
                                  </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Date</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class='input-group date' id='myDatepicker2'>
                                            <input type='text' class="form-control" name="date" />
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
                                            <input type='text' class="form-control" name="time"/>
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
                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" name="file" />
                                      </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose Option</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <select class="form-control" id="option" name="option">
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