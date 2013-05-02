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
			<h1>Misconceptions about Donating Blood</h1>
		</div>
	</div>
@stop