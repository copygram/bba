@extends('BackEnd.base')

@section('content')
	

	<form action="{{ URL::to('/admin/search') }}" method="post">
		
	      <label for="bloodtype">Blood Type:</label><br />
	      <select name="bloodtype" >
		       <option value="0">Choose one.</option>
		       <option value="A+">A+</option>
		       <option value="A-">A-</option>
		       <option value="B+">B+</option>
		       <option value="B-">B-</option>
		       <option value="AB+">AB+</option>
		       <option value="AB-">AB-</option>
		       <option value="O+">O+</option>
		       <option value="A1+">A1+</option>
		       <option value="A1-">A1-</option>
		       <option value="A2+">A2+</option>
		       <option value="A1B+">A1B+</option>
		       <option value="A2B+">A2B+</option>
		       <option value="A2B-">A2B-</option>
		       <option value="Unknown">Unknown</option>
	      </select>

	      <input  type="submit" value="Search" />
	    
	</form>
	
	

@stop