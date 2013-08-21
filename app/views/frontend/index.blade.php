@extends('frontEnd.layout.master')

@section('topcontent')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=214014001993372";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="container" id="bigPhotoOne">
			<div class="row">     

					<div class="sixcol">
					</div>
        		
					<div class="sixcol last frontMsgVideo">

						<iframe width="480" height="270" src="http://www.youtube.com/embed/D4Tcp15O5dE" frameborder="0" allowfullscreen></iframe>
						<br /><small>60 seconds on why you should donate blood</small><br />
						<a href="{{ route('donors.create') }}" class="bigbtn">start by register as a Donor</a>
					</div>
        			
        			<!-- <div class="sixcol last frontMsg">

        				<h2>Donate Blood<br />& Save a life</h2>
        				<p class="lead">A nation can meet all its need for blood,<br />
        				if only 1% to 3% of its population donate.</p>
        				<a href="{{ URL::to('/donor/register') }}" class="bigbtn">start by register as a Donor</a>
        				<br />
						<div>
						<div class="fb-like" data-href="http://www.facebook.com/pages/Blood-Bank-Africa/346943998742803?sid=0.3250413304194808" data-send="true" data-width="450" data-show-faces="true"></div>
						</div>
        				<div>
						<a href="https://twitter.com/share" class="twitter-share-button" data-text="Register as a Blood Donor Today -" data-via="BloodBankAfrica" data-hashtags="bba">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div> -->

        			</div>
        	</div>
		</div>
@stop


@section('content')

<div class="container" id="content">
	<div class="row" id="whatwedo">	
				<div class="twelvecol" style="padding-top:8px;">
					<!-- 
					<div style="width:20%; margin: 0 auto;">
					<div style="width: 50%; float: left;">
					<a href="https://twitter.com/share" class="twitter-share-button" data-text="Register as a Blood Donor Today -" data-via="BloodBankAfrica" data-hashtags="bba">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					<div style="width: 50%; float: left;">
					<div class="fb-like" data-href="http://www.facebook.com/pages/Blood-Bank-Africa/346943998742803?sid=0.3250413304194808" data-send="true" data-width="450" data-show-faces="true"></div>
					</div>
					</div>
					-->
				</div>

				<div class="twelvecol center">
				<span class="lead">Our mission</span>
				<h2>Devoted to Save Lifes</h2>
				<div class="line"></div>
				</div>
				
				<div class="twelvecol last">

					<p class="mission">
						We built a platform that makes it easy for any hospital or blood donation facility to get a valid donor to donate blood on time. Enduring the ever growing communication platform in Africa we built to scale, both backwards & forwards.  <strong>We’re here to stay.</strong>
					</p>

				</div>
	</div>
	
	<div class="row" id="whatwedo">	
				<div class="twelvecol center">
				<span class="lead">information</span>
				<h2>Facts on Blood Donation</h2>
				<div class="line"></div>
				</div>

				<div class="sixcol">
				<h3>The demand on blood.</h3>
				<p>Blood cannot be synthesized and its only source is blood donors. Around 92 million units of blood are donated annually all over the world with around half of this in areas of the world where nearly 85% of people live.</p>
				
				<h3>Multiple usecases.</h3>
				<p>The use of whole blood is avoided. Instead specific blood components needed for patients are provided. This way one unit of donated blood can be used to treat several patients. For example, red blood cells are given to patients suffering from severe anaemia arising from a variety of causes, including malaria in children.</p>
				</div>

				<div class="sixcol last">
				<h3>Blood is a living tissue.</h3>
				<p>The blood has to be stored in special refrigerators prior to use. A variety of chemicals are used to prevent clotting of blood, non-toxic preservatives to maintain the cells & newer ways to increase the shelf life of the blood.</p>
			
				<h3>Help others.</h3>
				<p>The blood you donate can save someone you may never meet. But you will always have the satisfaction of having given a gift of life, truly the most precious one.</p>
				</div>
				
				


				<div class="row grayline">	
					
					<div class="twelvecol center">
					<span class="lead">How it works</span>
					<h2>Lets get started, are you a donor?</h2>
					<div class="line"></div>
					
					<div class="twelvecol" style="margin-bottom: 60px;">
					<a href="{{ URL::to('/donor/register') }}" class="bigbtn" style="margin: 0 auto;">start by register as a Donor</a>
					</div>
					
					</div>
					
					<div class="fourcol">
					<h3>Sign up and help.</h3>
					<p>If you are interested in being a donor or if you are already listed at a hospital or local blood donation facility, <a href="{{ URL::to('/donor/register') }}">sign up now.</a> </p>
					</div>
					
					<div class="fourcol">
					<h3>You save lifes.</h3>
					<p>By signing up and making yourself visible to the medical community you’ll be part of helping to save lives. <a href="http://www.youtube.com/watch?v=D4Tcp15O5dE">See video.</a></p>
					</div>
					
					<div class="fourcol last">
					<h3>Insecure? ask us!</h3>
					<p>This is a trusted platform in close co-op with the hospitals and clinics, if you are insecure please <a href="mailto:hello@bloodbankafrica.com">email us.</a></p>
					</div>
				</div>

	</div>







<!-- 
	<div class="row" id="whatwedo">	
				
				<div class="twelvecol center">
				<spand class="lead">Become a partner</spand>
				<h2>Hospitals & Clinics</h2>
				<div class="line"></div>

				<div class="twelvecol" style="margin-bottom: 60px;">
					<a href="{{ URL::to('donors/create') }}" class="bigbtn" style="margin: 0 auto;">start by register as a Hospital</a>
				</div>

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
-->
</div>
@stop

