@extends('frontend.base')

@section('topcontent')



@stop

@section('content')
<div class="container">
	<div class="row" id="whatwedo">

        <div class="twelvecol center">
            <spand class="lead">Thank you so much</spand>
            <h2>By donating blood, you are saving other peoples lifes</h2>
            <div class="line"></div>
            <p style="width:60%; margin:0 auto; margin-bottom: 40px; font-size: 16px;">
            We want to add value, we think a lot of things in the world is brooken, and can be fixed with technology and we think by doing so other people can start doing really interesting things too and we get to see that play out.  
            <br /><br />Please help us build the best tool for Hospitals, and share <a href="http://bloodbankafrica.com">bloodbankafrica.com</a>
            </p>
        </div>

    	<div class="twelvecol">
    	<?php if(isset($registered)) : ?>
        	@if ( $registered == true )
            	<h1>Well thank you kind sir and or madam</h1>
        	@endif
    	<?php endif; ?>
    	</div>
	</div>
</div>
@stop