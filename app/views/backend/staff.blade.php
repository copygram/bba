@extends('backend.layout.master')

@include('backend._includes.menu-bar')

@section('content')
		<div class="col-lg-6">
			<div class="buttonAdd">
			</div>	
			<form class="form-staff" action="{{ route('newStaff') }}" method="POST">
	        <h3 class="form-staff-heading">New user</h3> 
	        @include('backEnd._includes.success')
	       <p> 
	       	<label for="fname">First name</label> 
	       	{{ $errors->first('fname','<span class="alert-danger">:message</span>') }}
	       	<input type="text" class="form-control" placeholder="First name" autofocus name="fname"> 
	       </p>

	        <p>
	         <label for="lname">Last name</label>
	         {{ $errors->first('lname','<span class="alert-danger">:message</span>') }}
	       	 <input type="text" class="form-control" placeholder="Last name" autofocus name="lname"> 
	       </p>

	        <p>
	          <label for="email">Email address</label>
	          {{ $errors->first('email','<span class="alert-danger">:message</span>') }}
	       	  <input type="text" class="form-control" placeholder="Email address" autofocus name="email"> 
	       </p>

	        <p>
	          <label for="mobile">Mobile</label>
	          {{ $errors->first('mobile','<span class="alert-danger">:message</span>') }} 
	       	  <input type="text" class="form-control" placeholder="Mobile" autofocus name="mobile"> 
	       </p>

	         <p>
	          <label for="gender_id">Gender</label> 
	       	  <select class="form-control" autofocus name="gender_id">
	       	  		<option value="1">Male</option>
	       	  		<option value="2">Female</option>
	       	  </select>
	       </p>

	        <p>
	          <label for="role">Role</label> 
	       	  <select class="form-control" autofocus name="role_id">
	       	  		<option value="1">Administrator</option>
	       	  		<option value="2">Nurse</option>
	       	  		<option value="3">Lab technician</option>
	       	  </select>
	       </p>
	      
	       <br>
	        <p><button class="btn btn-lg btn-primary btn-block" type="submit">Create</button></p>
	    </form>
    </div>

	<div class="col-lg-6">
		<h3>List of users</h3>
		<?php 

			$usersArray = (array)$users; 
			
			if(empty($usersArray) == false ) :
		?>
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Role</th>
					<th>Deactivate</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $users as $user )
					<tr>
						<td>{{ $user->fname.''.$user->lname }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->mobile}}</td>
						<td>{{ $user->role_id }}</td>
						<td>Deactivate</td>
					</tr>
				@endforeach
				
			</tbody>
		</table>
		<?php else: ?>
			<p>Currently there are no other users</p>

		<?php endif; ?>
	</div>
	
	

	
@stop