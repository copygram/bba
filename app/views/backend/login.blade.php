@extends('backend.layout.master')

@section('content')

	<form class="form-signin" action="{{ route('login') }}" method="POST">
        <h3 class="form-signin-heading">Please sign in</h3>
         @include('backend._includes.login-errors')
         
        <input type="text" class="form-control" placeholder="Email address" autofocus name="email">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>


@stop