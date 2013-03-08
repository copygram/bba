@extends('frontend.base')

@section('forhumanity')
	@section('style')
		style="padding-top: 80px;"
	@stop
	<h1>Start out by filling this form</h1>
@stop

@section('content')

<div class="row" id="donorReg">

			<div class="center formcanvas">
				<form action="/donors" method="POST" class="donorForm">
				<p>
	        		<label for="firstname">First name:</label><br />
	        		<input type="text"   class="required"  name="fname" value="">
	        	</p>
	        	<p>
	        		<label for="lastname">Last name:</label><br />
	        		<input type="text"   class="required"  name="lname" value="">
	        	</p>
	        	<p>
	        		<label for="email">Email:</label><br />
	        		<input type="email"   class="required email" name="email" value="">
	        	</p>
	           	<p>
	            	<label for="countrycode">Country code:</label><br />
	        		<input type="text"  required name="countrycode" value="">
	        		
	        		<label for="mobile">Mobile:</label><br />
	        		<input type="text"  class="required" name="mobile" value="">
	        	</p>
	        	<p>
	        		<label for="location">Location: <em>( Residential area )</em></label><br />
	        		<input type="text" class="required" name="area" id="location" value="">
	        		<input type="hidden" id="lat" name="lat"/>
					<input type="hidden" id="lng" name="lng"/>

	        	</p>
	        	<p>
	        		<label for="gender">Gender:</label><br />
	        		<select name="gender" >
	        			<option value="0">Choose one.</option>
	        			<option value="Female">Female</option>
	        			<option value="Male">Male</option>
	        		</select>	
	        	</p>
	        	<p>
	        		<label for="bloodtype">Blood Type:</label><br />
	        		<select name="bloodtype" >
	        			<option value="0">Choose one.</option>
	        			<option value="A" >A</option>
	        			<option value="A+" >A+</option>
	        			<option value="B+">B+</option>
	        			<option value="B-">B-</option>
	        			<option value="AB">AB</option>
	        			<option value="O+">O+</option>
	        			<option value="O-">O-</option>
	        			<option value="Unknown">Unknown</option>
	        		</select>
	        	</p>

	        	<p>
	        		<label for="donateDate">Last date donated:</label><br />
	        		<input type="donateDate"  name="email" value="">
	        	</p>

	        	<p>
	        		<button type="submit" class="bigbtn">Register</button>
	        	</p>
	        	
				</form>
			</div>

			</div>
			
   
@stop


