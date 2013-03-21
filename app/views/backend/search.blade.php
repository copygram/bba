@extends('backend.base')

@section('content')
	
<div class="container" style="min-height: 600px;">
    <div class="row" style="padding-top:60px;">

	<form action="{{ URL::to('/admin/search') }}" method="post">
		
<<<<<<< Updated upstream
	      <label for="bloodtype">Blood Type:</label><br /> 
=======
	      <label for="bloodtype">Blood Type:</label><br />
>>>>>>> Stashed changes
	      {{ Form::select('bloodtype_id', $bloodtypes, Input::old('bloodtype_id')) }}

	      <input  type="submit" value="Search" />
	      {{ $errors->first('bloodtype_id','<span class="field-error">:message</span>')}}
	    
	</form>
</div>
</div>	
	

@stop