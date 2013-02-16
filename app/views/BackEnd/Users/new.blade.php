@extends('BackEnd.default')

@section('content')
	<h2>Add new user</h2>

	<?php echo Form::open('admin/users/store','POST',array('id'=>'usersForm'))?>
		
		@include('BackEnd.notifications')

		<div class="form">
	         
	            <div class="form_row">
		            <label>First name:</label>
		            <input type="text" class="form_input" name="fname" value="<?php echo Input::old('fname'); ?>"/>
		            <p class="error"><?php echo  $errors->first('fname',':message') ;?></p>
	            </div>
	             
	            <div class="form_row">
		            <label>Last name:</label>
		            <input type="text" class="form_input" name="lname"   value="<?php echo Input::old('lname'); ?>"  />
		            <p   class="error" ><?php echo  $errors->first('lname',':message') ;?></p>
	            </div>
	            
	            <div class="form_row">
		             <label>Mobile:</label>
		             <input type="text" class="form_input" name="mobile" value="<?php echo Input::old('mobile'); ?>" />
		             <p  class="error" ><?php echo  $errors->first('mobile',':message') ;?></p>
	            </div>
	            
	             <div class="form_row">
	           	    <label>Email:</label>
	            	<input type="email" class="form_input" name="email"  value="<?php echo Input::old('email'); ?>"   />
	            	<p class="error" ><?php echo  $errors->first('email',':message') ;?></p>
	            </div>

	            <div class="form_row">
	            	
		            <label>Role:</label>
		            <select class="form_select" name="role" class="error">
			            <option value="0" >Select one</option>
			            <option  value="1">Administrator</option>
			            <option value="2">Doctor</option>
			            <option value="3">Nurse</option>
			            <option value="4">Receptionist</option>
		            </select>
		            @if(Session::has('message'))
	            		<p class="error" id="roleError">{{ Session::get('message')}}<p>
	            	@endif
		           
	            </div>

	            <div class="form_row">
	          		 <input type="submit" class="form_submit" value="Save details" />
	            </div> 


	            <div class="clear"></div>
	     </div>
	<?php echo Form::close();?>
   
@stop