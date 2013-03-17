@extends('frontend.base')

@section('topcontent')

		<div class="container" id="bigPhotoOne">
			<div class="row">     
				<!-- info -->
        	</div>
		</div>

@stop

@section('content')
<div class="container" id="content">

<center>
	<div id="donorReg" style="z-index: 50;">
		<div class="formcanvas">
			<form action="{{ URL::to('/donors') }}" method="POST" class="donorForm">
			<p>
	       		<label for="firstname">First name:</label><br />
	       		<input type="text"   class="required"  name="fname" value="">
	       	</p>
	       	<p>
	       		<label for="lastname">Last name:</label><br />
	       		<input type="text"   class="required"  name="lname" value="">
	       	</p>
	       	<p>
	       		<label for="gender">Gender:</label><br />
	       		<select name="gender" >
	       			<option value="1">Male</option>
	       			<option value="2">Female</option>
	       		</select>	
	       	</p>
	       	<p>
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
	        </p>

	        <p>
	        	<label for="lastDonated">Last donated:<em>( dd/mm/yyyy )</em></label><br />
	        	<input type="text" id="datepicker" name="lastDonated" value="">
	        </p>
        	<p>
        		<label for="location">Location: <em>( Residential area )</em></label><br />
        		<input type="text" class="required" name="area" id="location" value="">
        		<input type="hidden" id="lat" name="lat"/>
				<input type="hidden" id="lng" name="lng"/>
        	</p>
        	<p>
        		<label for="email">Email:</label><br />
        		<input type="email"   class="required email" name="email" value="">
        	</p>

        	<p>
        		<label for="countrycode">Country:</label><br />
        		<select name="countrycode">
	        			<option value="+46" selected >Sweden(+46)</option> 
						<option value="+213">Algeria (+213)</option> 
						<option value="+244">Angola (+244)</option> 
						<option value="+267">Botswana (+267)</option> 
						<option value="+226">Burkina Faso (+226)</option> 
						<option value="+257">Burundi (+257)</option> 
						<option value="+237">Cameroon (+237)</option> 
						<option value="+238">Cape Verde Islands (+238)</option> 
						<option value="+236">Central African Republic (+236)</option> 
						<option value="+269">Comoros (+269)</option> 
						<option value="+242">Congo (+242)</option> 
						<option value="+253">Djibouti (+253)</option> 
						<option value="+593">Ecuador (+593)</option> 
						<option value="+20">Egypt (+20)</option> 
						<option value="+240">Equatorial Guinea (+240)</option> 
						<option value="+291">Eritrea (+291)</option> 
						<option value="+251">Ethiopia (+251)</option> 
						<option value="+241">Gabon (+241)</option> 
						<option value="+220">Gambia (+220)</option> 
						<option value="+233">Ghana (+233)</option> 
						<option value="+224">Guinea (+224)</option> 
						<option value="+245">Guinea - Bissau (+245)</option> 
						<option value="+225">Ivory Coast (+225)</option> 
						<option value="+254">Kenya (+254)</option> 
						<option value="+266">Lesotho (+266)</option> 
						<option value="+231">Liberia (+231)</option> 
						<option value="+218">Libya (+218)</option> 
						<option value="+261">Madagascar (+261)</option> 
						<option value="+265">Malawi (+265)</option> 
						<option value="+223">Mali (+223)</option> 
						<option value="+212">Morocco (+212)</option> 
						<option value="+258">Mozambique (+258)</option> 
						<option value="+264">Namibia (+264)</option> 
						<option value="+227">Niger (+227)</option> 
						<option value="+234">Nigeria (+234)</option> 
						<option value="+250">Rwanda (+250)</option> 
						<option value="+221">Senegal (+221)</option> 
						<option value="+232">Sierra Leone (+232)</option> 
						<option value="+252">Somalia (+252)</option> 
						<option value="+27">South Africa (+27)</option> 
						<option value="+249">Sudan (+249)</option> 
						<option value="+228">Togo (+228)</option> 
						<option value="+216">Tunisia (+216)</option> 
						<option value="+256">Uganda (+256)</option> 
						<option value="+243">Zaire (+243)</option> 
						<option value="+260">Zambia (+260)</option> 
						<option value="+263">Zimbabwe (+263)</option>
  				</select>
  			</p>
	        <p>
	        	<label for="mobile">Mobile:</label><br />
	        	<input type="text"  class="required" name="mobile" value="">
	        </p>
	        <p>
	        	<button type="submit" class="bigbtn" style="max-width:100%;">Register</button>
	        </p>
	        </form>
		</div>
	</div>
</center>

</div> 
			
   
@stop


