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
					<li><a href="{{ URL::to('/about') }}">About</a> /</li>
					<li><a href="{{ URL::to('/about/blood-donation') }}">Blood Donation in General</a> /</li>
					<li><a href="{{ URL::to('/about/10-facts') }}">10 Facts from WHO</a> /</li>
					<li><a href="{{ URL::to('/about/misconceptions') }}" class="current">Misconceptions about Donating Blood</a> /</li>
					<li><a href="{{ URL::to('/about/lists-of-hospital') }}">Lists of Hospitals</a></li>
				</ul>
			</div>
		</div>
@stop

@section('content')
	<div class="row" id="whatwedo">	
		<div class="twelvecol">
			<br /><br />
			<h2>Misconceptions about Donating Blood</h2>
			<br />
		</div>
		
		<div class="twelvecol">
			<ul id="hospitalList">
				<li>Will not feel drained or tired if you continue to drink fluids and have a good meal.</li>
				<li>You can resume your normal activities after donating blood, though you are asked to refrain from exercise or heavy weight lifting for twelve hours after donation.</li>
				<li>Donating blood will not leave you low of blood; in fact you will still have surplus blood after the donation.</li>
				<li>While donating blood you will not feel any pain.</li>
				<li>You will not faint or feel uncomfortable after donating blood. This is a common misconception.</li>
				<li>You will not get AIDS if you donate blood.</li>
				<li>Patients are just like donors - most of them have common blood types. Because your blood type is common, the demand for that type is greater than for rare types. So, even if your blood type is common there is still a requirement.</li>
			</ul>

		</div>
	</div>
@stop
