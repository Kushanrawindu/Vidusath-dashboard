@extends('admin.layouts.app')

@section('main-content')
     <div class="form-group">
         <form action="{{route('school.update', $school->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}
                <form role="form">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select District</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <select class="form-control" id="newdistrict" name="newdistrict">
                            <option value="jaffna">Jaffna</option>
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
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" name="newname" placeholder="Enter School" value="{{$school->newname}}">
                    </div>

                <button type="submit" class="btn btn-success">Update</button>
         </form>
         
     </div>
@endsection