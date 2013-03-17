@extends('frontend.base')

@section('topcontent')

		<div class="container" id="bigPhotoOne">
			<div class="row">     
        		
					<div class="sixcol frontMsgVideo">

						<iframe width="320" height="180" src="http://www.youtube.com/embed/D4Tcp15O5dE" frameborder="0" allowfullscreen></iframe>
						<br /><small>60 seconds on why you should donate blood</small>
					</div>
        			
        			<div class="sixcol last frontMsg">

        				<h2>Donate Blood<br />& Save a life</h2>
        				<p class="lead">A nation can meet all its need for blood,<br />
        				if only 1% to 3% of its population donate.</p>

        				<a href="{{ URL::to('donors/create') }}" class="bigbtn">start by register as a Donor</a></div>
   					

        		
        	</div>
		</div>

@stop


@section('content')

	<div class="row" id="whatwedo">	
				<div class="twelvecol center">
				<spand class="lead">Our mission</spand>
				<h2>Devoted to save lifes</h2>
				<div class="line"></div>
				</div>
				
				<div class="fourcol">
				<h3>Make it easy.</h3>
				<p>We built a platform that makes it easy for any hospital or blood donation facility to get a valid donor to donate blood on time.</p>
				</div>
				
				<div class="fourcol">
				<h3>Built to last.</h3>
				<p>Enduring the ever growing communication platform in Africa we built to scale, booth backwards & forwards. We’re here to stay.</p>
				</div>
				
				<div class="fourcol last">
				<h3>The African region.</h3>
				<p>We concentrate on the African region, due to the none-presence of a much needed donation platform, we want change.</p>
				</div>
			</div>
			
			<div class="row" id="areyoudonor">	
				<div class="twelvecol center">
				<spand class="lead">How it works</spand>
				<h2>Lets get started, are you a donor?</h2>
				<div class="line"></div>
				</div>
				
				<div class="fourcol">
				<h3>Sign up and help.</h3>
				<p>If you are interested in being a donor or if you are already listed at a hospital or local blood donation facility, <a href="#">sign up now.</a> </p>
				</div>
				
				<div class="fourcol">
				<h3>You save lifes.</h3>
				<p>By signing up and making yourself visible to the medical community you’ll be part of helping to save life's. <a href="#">Read our Stories</a></p>
				</div>
				
				<div class="fourcol last">
				<h3>Insecure? ask us!</h3>
				<p>This is a trusted platform in close co-op with the hospitals and clinics, if you are insecure please <a href="#">visit our help section</a></p>
				</div>
			</div>
			
			<div class="row" id="areyouhospital">	
				<div class="twelvecol center">
				<spand class="lead">Become a partner</spand>
				<h2>Hospitals & Clinics</h2>
				<div class="line"></div>
				</div>
				
				<div class="fourcol">
				<h3>Join our program.</h3>
				<p>We work with many Hospitals in the entire African region, poor and healthy. The one important fact to remember is to save lifes.</p>
				</div>
				
				<div class="fourcol">
				<h3>Easy-to-use admin.</h3>
				<p>The hospital can set up more than one user and can use the admin to quickly search for nearby blood donors. </p>
				</div>
				
				<div class="fourcol last">
				<h3>Get more blood.</h3>
				<p>We learnt that the lack of blood in many cases are immensive and by using BBA you are getting more access to donors. </p>
				</div>
			</div>
@stop