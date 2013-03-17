@extends('BackEnd.base')

@section('supernav')
		<div id="superTop" class="container"></div>
				<div class="container top">
						<div class="row">
							<ul class="menu" id="menuLeft">
								<li><a href="{{ route('donorSearch') }}" id="home" class="menuItem">Search</a></li>

							</ul>
							
								<span id="logo">THE BLOOD BANK of AFRICA</span>
					
							<ul class="menu" id="menuRight">
								<!-- <li class="firstItem"><a href="/create" id="create" class="menuItem">Create account</a></li> -->
								<li class="firstItem"><a href="{{ URL::to('/admin/login') }}" id="login" class="menuItem">name</a></li>
								<li class="firstItem"><a href="{{ URL::to('/admin/login') }}" id="login" class="menuItem">Logout</a></li>
							</ul>
						</div>
				</div>
		</div>
@stop

@section('topcontent')


@stop

@section('content')
	<div class="row" id="whatwedo">	
		<div class="twelvecol center">

			
			
		</div>
	</div>
@stop