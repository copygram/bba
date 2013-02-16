@extends('BackEnd.default')

@section('content')
	<h2>Add new user</h2>
	<form name="/new" action="POST">
		<div class="form">
	         
	            <div class="form_row">
		            <label>First name:</label>
		            <input type="text" class="form_input" name="" />
	            </div>
	             
	            <div class="form_row">
		            <label>Last name:</label>
		            <input type="text" class="form_input" name="" />
	            </div>
	            
	            <div class="form_row">
		             <label>Mobile:</label>
		             <input type="text" class="form_input" name="" />
	            </div>
	            
	             <div class="form_row">
	           	    <label>Email:</label>
	            	<input type="email" class="form_input" name="" />
	            </div>

	            <div class="form_row">
		            <label>Role:</label>
		            <select class="form_select" name="">
			            <option>Select one</option>
			            <option>Administrator</option>
			            <option>Doctor</option>
			            <option>Nurse</option>
			            <option>Receptionist</option>
		            </select>
	            </div>

	            <div class="form_row">
	          		 <input type="submit" class="form_submit" value="Save details" />
	            </div> 
	            <div class="clear"></div>
	     </div>
     </form> 
@stop