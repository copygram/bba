@extends('frontend.base')

@section('topcontent')

		<div class="container" id="bigPhotoTwo">
			<div class="row">     
				<!-- info -->
        	</div>
		</div>

@stop

@section('content')
<div class="container">
	<div class="row">
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