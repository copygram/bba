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
        

        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}" >
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/lib/1140.css') }}">
        
        <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
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
								<li><a href="#" id="home" class="menuItem">Home</a></li>
								<li><a href="#" id="about" class="menuItem">About</a></li>
								<li><a href="#" id="contact" class="menuItem">Contact</a></li>
							</ul>
							
								<span id="logo">THE BLOOD BANK of AFRICA</span>
					
							<ul class="menu" id="menuRight">
								<li class="firstItem"><a href="#" id="create" class="menuItem">Create account</a></li>
								<li><a href="#" id="login" class="menuItem">Login</a></li>
							</ul>
						</div>
				</div>
		</div>
		
		
		<!-- This is the Big Photo or Video --> 
		
		<div class="container" id="bigPhoto">
			<div class="row">     
        		<div id="forHumanity">
        		<h1>for humanity.</h1>
        		</div>
        	</div>
		</div>
        
        
        
    <!-- FORM MODULE --> 
    
    <div class="container">
    <div class="row">
    			    <form>
    			    <div class="threecol">
	        		<p>
	        		<label for="firstname">Name:</label><br />
	        		<input type="text" name="firstname" value="">
	        		</p>
        			</div>
	        		
	        		<div class="threecol">
	        		<p>
	        		<label for="lastname">Lastname:</label><br />
	        		<input type="text" name="lastname" value="">
	        		</p>
	        		</div>
	        		
	        		<div class="threecol">
	        		<p>
	        		<label for="email">Email:</label><br />
	        		<input type="email" name="email" value="">
	        		</p>
	        		</div>
	        		
	        		<div class="threecol last">
	        		<p>
	        		<label for="username">Username</label><br />
	        		<input type="text" name="username" value="">
	        		</p>
	        		</div>
	        		
	        		
	        		
	        		
	        		<div class="threecol">
	        		<p>
	        		<label for="gender">Gender:</label><br />
	        		<select name="gender">
	        			<option value="">Choose one.</option>
	        			<option value="1">Female</option>
	        			<option value="2">Male</option>
	        		</select>	
	        		</p>
	        		</div>
	        		
	        		<div class="threecol">
	        		<p>
	        		<label for="bloodtype">Blood Type</label><br />
	        		<select name="bloodtype">
	        			<option value="">Choose one.</option>
	        			<option value="1">A+</option>
	        			<option value="2">A-</option>
	        			<option value="3">B+</option>
	        			<option value="4">B-</option>
	        			<option value="5">AB+</option>
	        			<option value="6">AB-</option>
	        			<option value="7">O+</option>
	        			<option value="7">O-</option>
	        		</select>
	        		</p>
	        		</div>
	        		
	        		<div class="threecol">
	        		<p>
	        		<label for="mobile">Mobile</label><br />
	        		<input type="text" name="mobile" value="">
	        		</p>
	        		</div>
	        		
	        		<div class="threecol last">
	        		<p>
	        		<label for="location">Location</label><br />
	        		<input type="text" name="location" value="">
	        		</p>
	        		</div>
	        		
	        		<div class="twelvecol">
	        		<p>
	        		<button type="submit">Register</button>
	        		</p>
	        		</div>
	        		
	        		

	        		
	        		
    			    </form>
    </div>
    </div>
	
	<!-- END of FORM MODULE --> 
        
        
        
         <script src="{{ asset('assets/js/jquery.v1.8.3.min.js') }}"></script>
        
        
        
        <!-- End of site JS and other mambo Jambo here -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.9.0.min.js') }}"><\/script>')</script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
