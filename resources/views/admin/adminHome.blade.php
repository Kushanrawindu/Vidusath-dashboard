@extends('admin.layouts.app')
   
@section('main-content')

<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
        <div class="count green">10,012</div>
        <h3>පාසල්</h3>
        <p>Total government schools in Sri Lanka</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-comments-o"></i></div>
        <div class="count green">179</div>
        <h3>New Sign ups</h3>
        <p>Total schools sign up to the system</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
        <div class="count green">250</div>
        <h3>Teachers</h3>
        <p>Total teachers registered</p>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i></div>
        <div class="count green">1790</div>
        <h3>Assignments</h3>
        <p>Total assignments provided</p>
      </div>
    </div>
</div>
    
@endsection