<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>List, Find and Get Blood Donors - Blood Bank Africa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/lib/1140.css">
        
        <script src="../assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="superTop" class="container"></div>
				<div class="container top">
						<div class="row">
							<ul class="menu" id="menuLeft">
								<li><a href="/" id="home" class="menuItem">Home</a></li>
								<li><a href="/about" id="about" class="menuItem">About</a></li>
								<li><a href="/contact" id="contact" class="menuItem">Contact</a></li>
							</ul>
							
								<span id="logo">THE BLOOD BANK of AFRICA</span>
					
							<ul class="menu" id="menuRight">
								<!-- <li class="firstItem"><a href="/create" id="create" class="menuItem">Create account</a></li> -->
								<li class="firstItem"><a href="admin/login" id="login" class="menuItem">Login</a></li>
							</ul>
						</div>
				</div>
		</div>
		
		
		<!-- This is the Big Photo or Video --> 
		
		<div class="container" id="bigPhoto">
			<div class="row">     
        		<div id="forHumanity" style="padding-top: 80px;">
        		<h1>Start out by filling this form</h1>
        		
        		</div>
        	</div>
		</div>
        

		<div class="container" id="donorReg">
			<div class="row">

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
	           	<label for="mobile">Country code:</label><br />
	        		<input type="text"  required name="countrycode" value="">
	        		<label for="code">Mobile:</label><br />
	        		<input type="text"  class="required" name="code" value="">
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
	        			<option value="A+" >A+-</option>
	        			<option value="B+">B+</option>
	        			<option value="B-">B-</option>
	        			<option value="AB">AB</option>
	        			<option value="O+">O+</option>
	        			<option value="O-">O-</option>
	        			<option value="Unknown">Unknown</option>
	        		</select>
	        	</p>
	        	<p>
	        		<button type="submit" class="bigbtn">Register</button>
	        	</p>
	        	
				</form>
			</div>

			</div>
    </div>
        


		<div class="container" id="footer">
			<div class="row" id="footercanvas">	
				<div class="sixcol">
					<p><strong>THE BLOOD BANK of AFRICA</strong></p>
					<p class="footerlead">Helping the medical industry in the African Region by enabeling a continental wide blood donor database</p>
					<ul>
						<li><a href="#">Home</a></li>
						<li class="gray">-</li>
						<li><a href="#">About</a></li>
						<li class="gray">-</li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				<div class="threecol">
					<p><strong>Are you a donor?</strong><br />
					<a href="#">sign up today</a></p>

					<p><strong>Hospitals or clinic?</strong><br />
					<a href="#">sign up today</a></p>
					
					<p><strong>Contact us</strong><br />
					<a href="#">help</a> - <a href="#">press</a> - <a href="#">legal</a></p>
				</div>
				<div class="threecol last">
					<p><strong>This is what the press says</strong>
					
					</p>
					
				</div>
				
				<div class="twelvecol center">
					<p><small>© 2013, BloodBankAfrica.com.  All Rights Reserved. <a href="#">Privacy Policy</a> - <a href="#">Terms of Service</a> - <a href="#">Partnership Guidelines</a> - <a href="#">Developers</a></small></p>
				</div>
				
			</div>
		</div>       
        
        
        
        
        <!-- End of site JS and other mambo Jambo here -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
        <script src="../assets/js/geo.js"></script>

        <!-- include Validation plugin-->
		<script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
		
		<!--hook it up-->
		<script type="text/javascript">
		$(document).ready(function() {
		
			//validation plugin
			$('.donorForm').validate();
				
		});		
		</script>
    </body>
</html>
