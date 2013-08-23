@extends('backEnd.layout.master')

@include('backEnd._includes.menu-bar')

@section('content')

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
      
       
        <button class="btn btn-lg btn-primary btn-block" type="submit">Create</button>
    </form>
	
	

	
@stop