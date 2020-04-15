@extends('admin.layouts.app')
   
@section('main-content')
    <div class="page-title">
        <div class="title_left">
            <h3>Schools | <small>Registered schools</small></h3>
        </div>

        <div class="title_right">
            <div class="col-md-2 col-sm-2 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
                <button id="compose" class="btn btn-sm btn-success btn-block" type="button" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i>    Add School</button>
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
                                <h4 class="modal-title" id="myModalLabel">Add New School</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School Name</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input type="text" class="form-control" placeholder="School Name">
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Province</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <select class="form-control">
                                            <option>Central</option>
                                            <option>Eastern</option>
                                            <option>North Central</option>
                                            <option>Nothern</option>
                                            <option>North Western</option>
                                            <option>Sabaragamuwa</option>
                                            <option>Southern</option>
                                            <option>Uva</option>
                                            <option>Western</option>
                                          </select>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select District</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <select class="form-control">
                                            <option>Jaffna</option>
                                            <option>Kilinochchi</option>
                                            <option>Mannar</option>
                                            <option>Mullaitivu</option>
                                            <option>Vavuniya</option>
                                            <option>Puttalam</option>
                                            <option>Kurunegala</option>
                                            <option>Gampaha</option>
                                            <option>Colombo</option>
                                            <option>Kalutara</option>
                                            <option>Anuradhapura</option>
                                            <option>Polonnaruwa</option>
                                            <option>Matale</option>
                                            <option>Kandy</option>
                                            <option>Nuwara Eliya</option>
                                            <option>Kegalle</option>
                                            <option>Ratnapura</option>
                                            <option>Trincomalee</option>
                                            <option>Batticaloa</option>
                                            <option>Ampara</option>
                                            <option>Badulla</option>
                                            <option>Monaragala</option>
                                            <option>Hambantota</option>
                                            <option>Matara</option>
                                            <option>Galle</option>
                                          </select>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Zone</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                          <input type="text" class="form-control" placeholder="Educational Zone">
                                        </div>
                                    </div> --}}
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
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>School name</th>
                          {{-- <th>Provine</th> --}}
                          <th>District</th>
                          {{-- <th>Educational Zone</th> --}}
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Rajasingha Central College</td>
                          {{-- <td>Sabaragamuwa</td> --}}
                          <td>Kegalle</td>
                          {{-- <td>Dehiowita</td> --}}
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
				          </div>
            </div>
        </div>
    </div>
@endsection