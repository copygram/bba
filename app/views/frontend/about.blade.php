@extends('frontend.base')

@section('topcontent')

		<div class="container" id="bigPhotoThree">
			<div class="row">     
				<!-- info -->
        	</div>
		</div>

		<div class="container" id="subNavigationCanvas">
			<div class="row">
				<ul id="subNavigation">
					<li><a href="{{ URL::to('/about') }}" class="current">About</a> /</li>
					<li><a href="{{ URL::to('/about/blood-donation') }}">Blood Donation in General</a> /</li>
					<li><a href="{{ URL::to('/about/10-facts') }}">10 Facts from WHO</a> /</li>
					<li><a href="{{ URL::to('/about/misconceptions') }}">Misconceptions about Donating Blood</a> /</li>
					<li><a href="{{ URL::to('/about/lists-of-hospital') }}">Lists of Hospitals</a></li>
				</ul>
			</div>
		</div>
@stop

@section('content')
	<div class="row" id="whatwedo">	
		<div class="twelvecol center">
			<spand class="lead">Meet the team</spand>
			<h2>This is for the crazy ones...</h2>
			<div class="line"></div>
		</div>
				
		<div class="fourcol">
			<h3>Otis Kennedy</h3>
			<p>We built a platform that makes it easy for any hospital or blood donation facility to get a valid donor to donate blood on time.</p>
		</div>
				
		<div class="fourcol">
			<h3>Oskar Adin</h3>
			<p>Enduring the ever growing communication platform in Africa we built to scale, booth backwards & forwards. We’re here to stay.</p>
		</div>
				
		<div class="fourcol last">
			<h3>Linus Ekenstam</h3>
			<p>We concentrate on the African region, due to the none-presence of a much needed donation platform, we want change.</p>
		</div>
	</div>
@stop