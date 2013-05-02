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
					<li><a href="{{ URL::to('/about/blood-donation') }}" class="current">Blood Donation in General</a> /</li>
					<li><a href="{{ URL::to('/about/10-facts') }}">10 Facts from WHO</a> /</li>
					<li><a href="{{ URL::to('/about/misconceptions') }}">Misconceptions about Donating Blood</a> /</li>
					<li><a href="{{ URL::to('/about/lists-of-hospital') }}">Lists of Hospitals</a></li>
				</ul>
			</div>
		</div>
@stop

@section('content')
	<div class="row" id="whatwedo">	
		<div class="twelvecol">
			<br /><br />
			<h2>Blood Dontation in General</h2>
			<br />
		</div>
		<div class="sevencol">

			<article>
				<h4>Why donate blood?</h4>
				<p>There have been many discoveries made in the medical sector on how to save someone’s life, but there is still no substitute for blood. Blood is very vital in a medical emergency. Blood donations can help a variety of individuals: trauma victims, surgery patients, premature babies, individuals with anemia, cancer patients and many more.Your single unit of blood can help save the lives of up to three separate patients.</p>
			</article>


			<article>
				<h4>Who can donate blood?</h4>
				<p>You can donate blood if you are aged 16-65 years, in good health, and weigh over 50 kg. However you can donate blood after age 65 years if you are certified medically fit. You can safely donate blood every 12 weeks.</p>
			</article>


			<article>
				<h4>Who needs blood?</h4>
				<p>Under normal circumstances, every two seconds someone needs a blood transfusion. Blood transfusions are used for trauma victims - due to accidents and burns - heart surgery, organ transplants, women with complications during childbirth, newborns and premature babies, and patients receiving treatment for leukemia, cancer or other diseases, such as sickle cell disease and thalassemia.  </p>
			</article>


			<article>
				<h4>Where can I donate blood?</h4>
				<p>Generally you don't need an appointment to give blood. You can register now as a donor to BBA and then you will be contacted by an approved official from registered hospital within your area when there is an emergency. Next option is to volunteer by visiting any of the approved hospital shown on the map or visit any regional blood donor centres in Nairobi, Embu, Mombasa, Nakuru, Kisumu, and Eldoret.<br /><a href="{{ URL::to('/about/lists-of-hospital') }}">List of Kenyan Hospitals</a></p>
			</article>


			<article>
				<h4>The process of donating blood.</h4>
				<p>Donating blood takes less than one hour from the time you arrive until you are ready to leave. First you complete a registration form with basic information such as your name, address and birthdate. This will be done only if you did not register as a donor at BBA. Then a medical professionals will perform preliminary check up for example check your blood pressure, temperature and hemoglobin level (iron). Once all that is done you will head to the blood donation part.The actual whole blood donation takes between five and 10 minutes. Afterwards, you will be given light snacks to replenish lost fluids during donation.</p>
			</article>

		</div>

		<div class="fivecol last">
			<h4>List of Hospitals</h4>
		<ul id="hospitalList">
			<li>The Aga Khan Hospital</li>
			<li>Pine Breeze Hospital</li>
			<li>Avenue Hospital</li>
			<li>Guru Nanak Hospital</li>
			<li>Gertrudes Garden Children’s Hospital</li>
			<li>Karen Hospital</li>
			<li>Kenyatta National Hospital</li>
			<li>Mariakani Cottage Hospital</li>
			<li>Mater Misericordiae Hospital, Nairobi</li>
			<li>Metropolitan Hospital</li>
			<li>Nairobi Hospital</li>
			<li>Coptic Church Nursing</li>
			<li>Nairobi West Hospital</li>
			<li>Nairobi Equator Hospital</li>
			<li>St. Marys Hospital (Langata)</li>
			<li>Bristol Park Hospital</li>
			<li>The Nairobi Women's Hospital- Hurlingham</li>
			<li>Nazareth Mission Hospital</li>
			<li>The Nairobi Women's Hospital-Adams</li>
			<li>MP Shah Hospital</li>
			<li>A.I.C Kijabe Hospital</li>
			<li>Consolata Hospital</li>
			<li>Nanyuki Cottage Hospital</li>
			<li>P.C.E.A. Kikuyu Hospital</li>
			<li>P.C.E.A. Tumutumu Hospital</li>
			<li>Coast Hospice</li>
			<li>Diani Beach Hospital</li>
			<li>Aga Khan Hospital</li>
			<li>MEWA Hospital</li>
			<li>Mombasa Hospital</li>
			<li>Aga Khan Hospital</li>
			<li>Nyanza Provincial Hospital</li>
			<li>St Mary's Mission Hospital, Gilgil</li>
			<li>Kisumu district general Hospital</li>
		</ul>
		</div>
	</div>
@stop