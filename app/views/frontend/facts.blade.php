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
					<li><a href="{{ URL::to('/about/10-facts') }}" class="current">10 Facts from WHO</a> /</li>
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
			<h2>10 Facts from WHO</h2>
			<br />
		</div>
		
		<div class="twelvecol">
			<article>
				<h4>Blood transfusion saves lives and improves health.</h4>
				<p>However, many patients requiring transfusion do not have timely access to safe blood. Every country needs to ensure that blood supplies are sufficient and free from HIV, hepatitis viruses and other infections that can be transmitted through unsafe transfusion.</p>
			</article>
			
			<article>
				<h4>Transfusions are used to support various treatments.</h4>
				<p>In high-income countries, transfusion is most commonly used to support advanced medical treatment and complex surgeries like open-heart surgery and advance trauma care. In low- and middle-income countries it is used often for management of pregnancy-related complications, childhood malaria complicated by severe anaemia and trauma-related injuries.</p>
			</article>
			
			<article>
				<h4>An adequate supply of safe blood can only be assured through regular donation by voluntary unpaid blood donors.</h4>
				<p>Adequate supply of safe blood can only be assured through regular donation by voluntary unpaid blood donors, because the prevalence of bloodborne infections is lowest among these donors. It is higher among donors who give blood only as a replacement when it is required for a family and among those who give blood for money or other forms of payment.</p>
			</article>
			
			<article>
				<h4>Voluntary unpaid donors account for 100% of blood supplies in 62 countries.</h4>
				<p>Since the inception of World Blood Donor Day in 2004, 111 countries have reported an increase in the number of voluntary donations. But in 40 countries, less than 25% of blood supplies come from voluntary unpaid donors.</p>
			</article>
			
			<article>
				<h4>Around 92 million blood donations are collected globally every year.</h4>
				<p>About 50% of these are donated in low- and middle-income countries where nearly 85% of the world’s population lives. The average blood donation rate is more than 13 times greater in high-income countries than in low-income countries.</p>
			</article>
			
			<article>
				<h4>Collections at blood centres vary according to income group.</h4>
				<p>About 8000 blood centres in 159 countries report collecting, on an average, 10 000 blood donations per centre (range from 20 to almost 500 000). The average annual collection per blood centre is 30 000 in high-income countries, 7500 in middle-income countries and 3700 in low-income countries.</p>
			</article>
			
			<article>
				<h4>People in high-income countries donate blood more frequently than in low- or middle-income countries.</h4>
				<p>The median blood donation rate in high-income countries is 36.4 donations per 1000 people. This compares with 11.6 donations per 1000 people in middle-income countries and 2.8 donations in low-income countries.</p>
			</article>
			
			<article>
				<h4>Donated blood should always be screened.</h4>
				<p>All donated blood should always be screened for HIV, hepatitis B, hepatitis C and syphilis prior to transfusion. Yet in 39 countries not all donated blood is tested for one or more of these infections. Testing is not reliable in many countries because of staff shortages, poor quality test kits, irregular supplies, or lack of basic laboratory services.</p>
			</article>
			
			<article>
				<h4>A single unit of blood can benefit several patients.</h4>
				<p>Separating blood into its various components allows a single unit of blood to benefit several patients and provides a patient only the blood component which is needed. About 91% of the blood collected in high-income countries, 72% in middle-income countries and 31% in low-income countries is separated into blood components.</p>
			</article>
			
			<article>
				<h4>Unnecessary transfusions expose patients to needless risk.</h4>
				<p>Often transfusions are prescribed when simple and safe alternative treatments might be equally effective. As a result such a transfusion may not be necessary. An unnecessary transfusion exposes patients to the needless risk of infections or severe transfusion reactions.</p>
			</article>
		</div>
		
	</div>
@stop
