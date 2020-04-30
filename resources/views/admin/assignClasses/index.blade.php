@extends('admin.layouts.app')
   
@section('main-content')
<form action="#" method="POST" class="form-horizontal form-label-left">
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
      <select class="form-control" id="school" name="school">
        {{-- @foreach ($my_schools as $my_schools)
          <option value="{{$my_schools->id}}">{{$my_schools->name}}</option>
        @endforeach  --}}
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
        <tr>
            <td>1</td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>3</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>4</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>5</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>6</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>7</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>8</td>
            
            <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select>
            </td>
            <td><select size="1" id="row-1-office" name="row-1-office">
                <option value="Edinburgh" selected="selected">
                    Edinburgh
                </option>
                <option value="London">
                    London
                </option>
                <option value="New York">
                    New York
                </option>
                <option value="San Francisco">
                    San Francisco
                </option>
                <option value="Tokyo">
                    Tokyo
                </option>
                </select>
            </td>
        </tr>
    </tbody>
</table>
</form>
@endsection