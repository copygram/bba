@extends('backend.layout.master')

@include('backEnd._includes.menu-bar')

@section('content')

<div class="row search">
	{{ Form::open(array('route'=>'searchForm','method'=>'POST','role'=>'form','class'=>'form-horizontal')) }}
	  <div class="form-group">
	    <label for="bloodType" class="col-sm-2 control-label">Blood Type</label>
	    <div class="col-sm-4">
	        {{ Form::select('bloodtype_id', $bloodtypes, Input::old('bloodtype_id'),array('class'=>'form-control')) }}
	        {{ $errors->first('bloodtype_id','<span class="error">:message</span>')}} 
	    </div>
	  </div>
	 
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Search</button>
	    </div>
	  </div>
	{{ Form::close() }}
</div>

	
@stop