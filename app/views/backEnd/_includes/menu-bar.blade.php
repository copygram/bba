@extends('backend.layout.master')

@section('menu')
	<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blood Bank Africa</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{ route('searchForm') }}">Search</a></li>
           <!-- <li><a href="{{ route('newStaff') }}">Users</a></li> -->
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if( Auth::check())
              <li id="user-logged"><a href="#">Logged in as:  {{ Auth::user()->fname .' '.Auth::user()->lname }} </a></li>
            @endif
           <!-- <li><a href="#">Settings</a></li> -->
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
@stop