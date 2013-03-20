@extends('BackEnd.base')

@section('content')
	
<div class="container" style="min-height: 600px;">
    <div class="row" style="padding-top:60px;">

	<form action="{{ URL::to('/admin/search') }}" method="post">
		
	      <label for="bloodtype">Blood Type:</label><br />
	      {{ Form::select('bloodtype_id', $bloodtypes, Input::old('bloodtype_id')) }}

	      <input  type="submit" value="Search" />
	    
	</form>
</div>
</div>	
	

@stop