@extends('frontEnd.layout.master')

@section('topcontent')
	
	@include('frontEnd._includes.topContent')
	
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
			<h4>List of Hospitals in Nairobi, Kenya</h4>
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