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
					<li><a href="{{ URL::to('/about/misconceptions') }}">Misconceptions about Donating Blood</a> /</li>
					<li><a href="{{ URL::to('/about/lists-of-hospital') }}" class="current">Lists of Hospitals</a></li>
				</ul>
			</div>
		</div>
@stop

@section('content')
	<div class="row" id="whatwedo">	
		<div class="twelvecol">
			<br /><br />
			<h2>Lists of Hospitals</h2>
			<br />
		</div>
		
		<div class="twelvecol">
			 <ul id="hospitalList">
				<li><a href="http://www.agakhanhospitals.org/nairobi/">The Aga Khan Hospital (Nairobi)</a></li>
				<li><a href="#">Pine Breeze Hospital</a></li>
				<li><a href="http://www.avenuehealthcare.com/">Avenue Hospital</a></li>
				<li><a href="#">Guru Nanak Hospital</a></li>
				<li><a href="http://www.gerties.org/">Gertrudes Garden Children’s Hospital</a></li>
				<li><a href="http://karenhospital.org/">Karen Hospital</a></li>
				<li><a href="http://knh.or.ke/">Kenyatta National Hospital</a></li>
				<li><a href="http://www.mchkenya.org/">Mariakani Cottage Hospital</a></li>
				<li><a href="http://www.materkenya.com/">Mater Misericordiae Hospital, Nairobi</a></li>
				<li><a href="#">Metropolitan Hospital</a></li>
				<li><a href="http://www.nairobihospital.org/">Nairobi Hospital</a></li>
				<li><a href="http://www.coptichospital.org/">Coptic Church Nursing</a></li>
				<li><a href="http://nairobiwesthospital.com/">Nairobi West Hospital</a></li>
				<li><a href="http://www.meridianequator.com/">Nairobi Equator Hospital</a></li>
				<li><a href="#">St. Marys Hospital (Langata)</a></li>
				<li><a href="http://bristolpark.or.ke/">Bristol Park Hospital</a></li>
				<li><a href="http://www.nwch.co.ke/hurlingham-branch/">The Nairobi Women's Hospital- Hurlingham</a></li>
				<li><a href="http://www.nazarethhospital.or.ke/">Nazareth Mission Hospital</a></li>
				<li><a href="http://www.nwch.co.ke/">The Nairobi Women's Hospital-Adams</a></li>
				<li><a href="http://www.mpshahhosp.org/">MP Shah Hospital</a></li>
				<li><a href="http://www.kijabehospital.org/">A.I.C Kijabe Hospital</a></li>
				<li><a href="http://consolatahospital.org/">Consolata Hospital</a></li>
				<li><a href="#">Nanyuki Cottage Hospital</a></li>
				<li><a href="http://www.pceakikuyuhospital.org/">P.C.E.A. Kikuyu Hospital</a></li>
				<li><a href="http://pceatumutumuhospital.org/">P.C.E.A. Tumutumu Hospital</a></li>
				<li><a href="http://coasthospice.or.ke/">Coast Hospice</a></li>
				<li><a href="http://www.dianibeachhospital.com/">Diani Beach Hospital</a></li>
				<li><a href="http://www.agakhanhospitals.org/mombasa/">Aga Khan Hospital (Mombasa)</a></li>
				<li><a href="http://www.mewa.or.ke/">MEWA Hospital</a></li>
				<li><a href="#">Mombasa Hospital</a></li>
				<li><a href="http://www.agakhanhospitals.org/kisumu/">Aga Khan Hospital (Kisumu)</a></li>
				<li><a href="#">Nyanza Provincial Hospital</a></li>
				<li><a href="#">St Mary's Mission Hospital, Gilgil</a></li>
				<li><a href="#">Kisumu district general Hospital</a></li>
		    </ul>
		</div>
	</div>
@stop
