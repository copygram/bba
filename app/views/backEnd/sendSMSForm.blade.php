@extends('backEnd.layout.master')

@include('backEnd._includes.menu-bar')

@section('content')


<div class="row search">

	<div class="col-md-6">
		<a href="javascript:history.back()" class="btn btn-default">Back</a> <br> <br> <br>
		 {{ Form::open(array('action'=>'AdminController@sendSMS','method'=>'POST','class'=>'form-horizontal','role'=>'form')) }}
		          
			<p>
				{{ Form::label('recipient','Recipient(s)') }}
			    {{ Form::text('recipient',$phonenumber,array('class'=>'form-control')) }}
		    </p>
		
			<p>
				{{ Form::label('message','Message') }}
				{{ Form::textarea('message','',array('class'=>'form-control')) }}
			</p>

			{{ Form::submit('Send SMS',array('class'=>'btn btn-primary form-control')) }}
		{{ Form::close() }}
	</div>
</div>

	
@stop