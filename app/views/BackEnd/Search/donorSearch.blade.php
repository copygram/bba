@extends('BackEnd.default')

@section('content')
	<h2>Search for donors</h2>
	
	<?php echo Form::open(); ?>
	   <div class="form_row">
	   	@if(Session::has('flash_notice'))
	   		
	   			{{ Session::get('flash_notice') }}
	   		
	   	@endif
		            	
	     	 <label><p>Blood type</p></label>
		     <p>
		     	<select class="form_select" name="bloodType" class="error">
					<option value="0" >Select one</option>
					<option  value="A">A</option>
					<option value="B">B</option>
					<option value="A+">A+</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
			 	</select>
			 	<?php echo Form::submit('Search',array('id'=>'searchbutton')) ;?>	
			</p>           
		</div>


	<?php echo Form::close();?>

@stop