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
			<spand class="lead">Meet the people behind this</spand>
			<h2>We have a macro reason for doing this</h2>
			<div class="line"></div>
			<p style="width:60%; margin:0 auto; margin-bottom: 40px; font-size: 16px;">
			We want to add value, we think a lot of things in the world is brooken, and can be fixed with technology and we think by doing so other people can start doing really interesting things too and we get to see that play out.  </p>
		</div>
				
		<div class="fourcol">
			<img src="assets/images/about/otis.jpg" alt="Otis Kennedy" title="Otis Kennedy" width="100%" style="margin-bottom:10px;" />
			<h3>Otis Kennedy</h3>
			<p>Moved to Sweden from Nairobi, Kenya in the summer of 2012. Backend Engineer that never stops to learn new things. He want to give back to the socity, fluent in Swahili and English and soon Swedish. </p>
			<p><a href="mailto:otis@bloodbankafrica.com">otis@bloodbankafrica.com</a><br />
			<a href="http://twitter.com/kenjox">@Kenjox</a>
			</p>
		</div>
				
		<div class="fourcol">
			<img src="assets/images/about/oskar.jpg" alt="Oskar Adin" title="Oskar Adin" width="100%" style="margin-bottom:10px;" />
			<h3>Oskar Adin</h3>
			<p>Lives in Gothenburg, Sweden and builds window farms, code in blind and loves to ride his bike. The world is a better place with him in it, he always lends a helping hand and is also a frequent blood donor. </p>
			<p><a href="mailto:oskar@bloodbankafrica.com">oskar@bloodbankafrica.com</a><br />
			
			</p>
		</div>
				
		<div class="fourcol last">
			<img src="assets/images/about/linus.jpg" alt="Linus Ekenstam" title="Linus Ekenstam" width="100%" style="margin-bottom:10px;"/>
			<h3>Linus Ekenstam</h3>
			<p>From Falkenberg, Sweden - driven by large thinking and small scale, an serial entrepreneur with focus on people rather than products. Wants to help the world step by step, the first is to eliminate the lack of blood.</p>
			<p><a href="mailto:linus@bloodbankafrica.com">linus@bloodbankafrica.com</a><br />
			<a href="http://twitter.com/linusekenstam">@LinusEkenstam</a>
			</p>
		</div>

		<div class="fourcol">
			<img src="assets/images/about/magnus.jpg" alt="Magnus Janson" title="Magnus Janson" width="100%" style="margin-bottom:10px;" />
			<h3>Magnus Janson</h3>
			<p>Originated in Lysekil, Sweden now lives in Gothenurg. Magnus is passionated about stories, every person has something to share, and his way of telling stories is thru photography, he is also a frequent blood donor.</p>
			<p><a href="mailto:otis@bloodbankafrica.com">magnus@bloodbankafrica.com</a><br />
			<a href="http://twitter.com/magnus_janson">@magnus_janson</a>
			</p>
		</div>
				
		<div class="fourcol">
			<img src="assets/images/about/anna.jpg" alt="Anna-Lena Winter" title="Anna-Lena Winter" width="100%" style="margin-bottom:10px;" />
			<h3>Anna-Lena Winter</h3>
			<p>From Glommen, Sweden - Started out her web carrier at a really early stage, before the 1999 crash, and survived. Now she operates an Web Agency and put extra energy into social profit projects, BBA being one of them.</p>
			<p><a href="mailto:anna@bloodbankafrica.com">anna@bloodbankafrica.com</a><br />
			
			</p>
		</div>
				
		<div class="fourcol last">
			<img src="assets/images/about/andreas.jpg" alt="Andreas Winter" title="Andreas Winter" width="100%" style="margin-bottom:10px;"/>
			<h3>Andreas Winter</h3>
			<p>From Glommen, Sweden - with over 25 years of work with media, print, digital, an senior strategist with loads of sweat behind him, he is no determined that the lack of blood can be solved with technology, it's just a matter of how fast.</p>
			<p><a href="mailto:linus@bloodbankafrica.com">andreas@bloodbankafrica.com</a></p>
		</div>
	</div>
@stop