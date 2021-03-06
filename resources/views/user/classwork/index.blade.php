@extends('user.layouts.app')
   
@section('main-content')
<div class="page-title">
    <div class="title_left">
        <h3>Classwork | <small>Manage Studies</small></h3>
    </div>
    <div class="title_right">
      <div class="col-md-4 col-sm-2 col-xs-12 form-group pull-right top_search"></div>
    </div>
</div>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      {{-- <div class="x_title">
        <h2>Form Design <small>different form elements</small></h2>
        <div class="clearfix"></div>
      </div> --}}
      <div class="x_content">
        <br />
        <form action="{{route('classwork.store')}}" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Your School</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="school" name="school">
                  {{-- <option value="{{ Auth::user()->school }}">{{ Auth::user()->school }}</option> --}}
                  <?php $schools = \App\MySchool::all(); ?>
                    @foreach ($schools as $school)
                      <option value="{{$school->id}}">{{$school->name}}</option>
                    @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Your Name</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="teacher" name="teacher">
                  <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Grade</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control dynamic" id="grade" name="grade">
                <option selected="false">--Select Grade--</option>
                @foreach ($grades as $grades)
                  <option value="{{$grades->id}}">{{$grades->grade}}</option>
                @endforeach 
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Class</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control dynamic" id="class" name="class">
                <option selected="false">--Select Class--</option>
                @foreach ($classes as $classes)
                    <option value="{{$classes->id}}">{{$classes->class}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Subject</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="select2_group form-control dynamic" id="subject" name="subject">
                <option selected="false">--Select Subject--</option>
                <?php $subjects = \App\Subject::all(); ?>
                @foreach ($subjects as $subject)
                    <option value="{{$subject->id}}">{{$subject->subject}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel">
                <div class="x_content">
                  <div id="alerts"></div>
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                      <div class="dropdown-menu input-append">
                        <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                        <button class="btn" type="button">Add</button>
                      </div>
                      <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                      <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" class="editor-wrapper"></div>

                  {{-- <textarea name="description" id="description" style="display:none;"></textarea> --}}
                  <br />

                  <div class="ln_solid"></div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Resizable Text area</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <textarea name="description" id="description" class="resizable_textarea form-control" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..."></textarea>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Date</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
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
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class='input-group date' id='myDatepicker3'>
                    <input type='text' class="form-control" name="time"/>
                    <span class="input-group-addon">
                       <span class="glyphicon glyphicon-dashboard"></span>
                    </span>
                </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Select File</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="btn-group">
                <a class="btn" id="pictureBtn"></a>
                <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" name="file" multiple />
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose Option</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control" id="option" name="option">
                <option value="classwork">Class Work</option>
                <option value="homework">Home Work</option>
                <option value="assignment">Assignment</option>
              </select>
            </div>
          </div>
          
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button class="btn btn-primary" type="button">Cancel</button>
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
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>School</th>
                      <th>Teacher</th>
                      <th>Subject</th>
                      <th>Grade</th>
                      <th>Class</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>File</th>
                      <th>Option</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($classwork as $classwork)
                    <tr>
                      <th scope="row">{{$classwork->id}}</th>
                      <td>{{ Auth::user()->school }}</td>
                      <td>{{ Auth::user()->name }}</td>
                      <td>{{$classwork->subject}}</td>
                      <td>{{$classwork->grade}}</td>
                      <td>{{$classwork->class}}</td>
                      <td>{{$classwork->title}}</td>
                      <td>{{$classwork->description}}</td>
                      <td>{{$classwork->date}}</td>
                      <td>{{$classwork->time}}</td>
                      <td>{{$classwork->file}}</td>
                      <td>{{$classwork->option}}</td>
                      <td><form action="{{route('classwork.destroy', $classwork->id)}}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs" >Delete</button>
                          </form>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom-scripts')

  {{-- <script type="text/javascript">
    $('#class').change(function(){

      var grade = $('#grade').val();
      var cls = $('#class').val();

        $.ajax({
              url:"{{ route('classwork.getLession') }}",
              method: "get",
              data: {grade:grade,class:cls},
              datatype: "json",
              success:function (data) {
                $('#subject').html(data.html);
              }
          });
    });
  </script> --}}
@endsection