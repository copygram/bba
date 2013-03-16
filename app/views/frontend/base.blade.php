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

        {{ HTML::style('/assets/css/normalize.css') }}
        {{ HTML::style('/assets/css/main.css') }}
        {{ HTML::style('/assets/css/lib/1140.css') }}
   		{{ HTML::script('/assets/js/vendor/modernizr-2.6.2.min.js') }}
        
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
								<li><a href="{{ URL::to('/') }}" id="home" class="menuItem">Home</a></li>
								<li><a href="{{ URL::to('/about') }}" id="about" class="menuItem">About</a></li>
								<li><a href="{{ URL::to('/contact') }}" id="contact" class="menuItem">Contact</a></li>
							</ul>
							
								<span id="logo">THE BLOOD BANK of AFRICA</span>
					
							<ul class="menu" id="menuRight">
								<!-- <li class="firstItem"><a href="/create" id="create" class="menuItem">Create account</a></li> -->
								<li class="firstItem"><a href="{{ URL::to('/admin/login') }}" id="login" class="menuItem">Login</a></li>
							</ul>
						</div>
				</div>
		</div>
		
		
		<!-- This is the Big Photo or Video --> 
		
		<div class="container" id="bigPhoto">
			<div class="row">     
        		<div id="forHumanity" @yield('style') >

        			@yield('forhumanity')

        		</div>
        	</div>
		</div>
        

		<div class="container" id="content" >	
			
			@yield('content')

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
					<a href="{{ URL::to('/donors/create') }}">sign up today</a></p>

					<p><strong>Hospitals or clinic?</strong><br />
					<a href="#">sign up today</a></p>
					
					<p><strong>Contact us</strong><br />
					<a href="{{ URL::to('/contact') }}">help</a> - <a href="#">press</a> - <a href="#">legal</a></p>
				</div>
				<div class="threecol last">
					<p><strong>This is what the press says</strong>
					
					</p>
					
				</div>
				
				<div class="twelvecol center">
					<p><small>&copy; {{ date('Y') }}, BloodBankAfrica.com.  All Rights Reserved. <a href="#">Privacy Policy</a> - <a href="#">Terms of Service</a> - <a href="#">Partnership Guidelines</a> - <a href="#">Developers</a></small></p>
				</div>
				
			</div>
		</div>       
        
        
        <!-- End of site JS and other mambo Jambo here -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        
        {{ HTML::script('/assets/js/plugins.js') }}
        {{ HTML::script('/assets/js/main.js') }}
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

        <!-- Date picker -->
       	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script> 
       
       {{ HTML::script('/assets/js/geo.js') }}

          
        <!-- include Validation plugin-->
		<script type="text/javascript" src="../assets/js/jquery.validate.js"></script>
       <!--hook it up-->
		<script type="text/javascript">
		$(document).ready(function() {
		
			//validation plugin
			$('.donorForm').validate();

			//date picker
			$( "#datepicker" ).datepicker();
				
		});		
		</script>
    </body>
</html>
