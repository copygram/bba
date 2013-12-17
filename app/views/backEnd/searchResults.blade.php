@extends('backEnd.layout.master')

@include('backEnd._includes.menu-bar')

@section('content')

<div class="row search">
   
   <a href="{{ route('searchForm') }}" class="btn btn-default" style="margin-bottom:20px;">Back to search</a>
   <a href="{{ route('donorSearchOnMap') }}" class="btn btn-default" style="margin-bottom:20px;">View on map</a>

	@if( count($donors) > 0)
		
		<div class="panel panel-primary">
			<div class="panel-heading">Donors</div>
			<div class="panel-body">
					<div class="pull-right">
					     <span>With Selected:</span><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Send SMS</button>
					</div>
					<table class="table" id="users">
				      <thead>
				        <tr>
				          <th>First Name</th>
				          <th>Last Name</th>
				          <th>Mobile</th>
				          <th></th>
				        </tr>
				      </thead>
				      <tbody>
				      	@foreach( $donors as $donor )
					        <tr>
					          <td class="fname">{{ $donor->fname }}</td>
					          <td class="lname">{{ $donor->lname }}</td>
					          <td class="email">{{ $donor->mobile }}</td>
				              <td><input type="checkbox" name="checkbox[]"></td>
				              <td><a href="{{ route('sendSMS',$donor->id) }}">SMS</a></td>
					        </tr>
				        @endforeach
				      </tbody>
	                </table>
			</div>
		</div>
	@else
		<h2>No donor was found</h2>
	@endif
</div>

<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Contact donors</h4>
	      </div>
	       {{ Form::open(array('action'=>'AdminController@sendSMS','method'=>'POST','class'=>'form-horizontal','role'=>'form')) }}
	          <div class="modal-body">

			{{ Form::label('recipient','Recipient(s)') }}
			{{ Form::text('recipient','',array('class'=>'form-control')) }}

			{{ Form::label('message','Message') }}
			{{ Form::textarea('message','',array('class'=>'form-control')) }}

	          </div>
		      <div class="modal-footer">
		      	{{ Form::submit('Send SMS',array('class'=>'btn btn-primary')) }}
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		      </div>
	       {{ Form::close() }}
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


	
@stop