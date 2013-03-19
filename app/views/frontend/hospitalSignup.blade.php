@extends('frontEnd.base')

@section('forhumanity')
	@section('style')
		style="padding-top: 80px;"
	@stop
	<h1>Hospital sign up form</h1>
@stop

@section('content')

<div class="row" id="donorReg">

	<div class="center formcanvas">
		<form action="{{ URL::to('hospitals') }}" method="POST" class="donorForm">
				<p>
	        		<label for="name">Hospital name:</label><br />
	        		<input type="text"   class="required"  name="name" value="">
	        	</p>

	        	<p>
	        		<label for="licence">Licence Number:</label><br />
	        		<input type="text"   class="required"  name="licence" value="">
	        	</p>

	        	<p>
	        		<label for="location">Location: <em>( Operational area )</em></label><br />
	        		<input type="text" class="required" name="area" id="location" value="">
	        		<input type="hidden" id="lat" name="lat"/>
					<input type="hidden" id="lng" name="lng"/>

	        	</p>

	        	<p>
	            	<label for="countrycode">Country code:</label><br />
	        		<input type="text"  required name="countrycode" value="">
	        		
	        		<label for="mobile">Tel/Mobile Number:</label><br />
	        		<input type="text"  class="required" name="mobile" value="">
	        	</p>
	        	<p>
	        		<label for="email">Email:</label><br />
	        		<input type="email"   class="required email" name="email" value="">
	        	</p>
	     
	        	
	        	<p>
	        		<button type="submit" class="bigbtn">Register</button>
	        	</p>
	        	
		</form>
	</div>

</div>
			
   
@stop


