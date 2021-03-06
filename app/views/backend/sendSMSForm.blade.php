@extends('backend.layout.master')

@include('backend._includes.menu-bar')

@section('content')


<div class="row search">

	<div class="col-md-6">
		<a href="javascript:history.back()" class="btn btn-default">Back</a> <br> <br> <br>
		
		@if(Session::has('success'))
			<div class="alert alert-success alert-dismissable">
			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			  <p>{{ Session::get('success') }}</p>
			</div>
			
		@endif
		
		 {{ Form::open(array('action'=>'AdminController@sendSMS','method'=>'POST','class'=>'form-horizontal','role'=>'form')) }}
		    
		    {{ Form::hidden('donor_id',$donorID) }}
			<p>
				{{ Form::label('recipient','Recipient(s)') }}
			    {{ Form::text('recipient',$phonenumber,array('class'=>'form-control')) }}
		    </p>

		    <p>
		    	{{ Form::label('patient_no','Patient Number') }}
			    {{ Form::text('patient_no','',array('class'=>'form-control')) }}
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