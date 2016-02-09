@extends('master')

@section('title', 'Register')
@section('meta-description', 'Register to tweet.2')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	        	<div class="title">tweet.2</div>
	            <div class="secondaryTitle">REGISTER</div>
	        </div>
	    
	        <form action="/register" method="post">

	        {!! csrf_field() !!}

	        	<div>
	        		<label for="name">Name:</label>
	        		<input type="text" name="name" id="name" value="{{ old('name') }}">
	        		@if($errors->first('name'))
		    			<span><small>*{{ $errors->first('name') }}</small></span>
		    			<br>
		    		@endif
	        	</div>
	        	<div>
	        		<label for="email">Email:</label>
	        		<input type="email" name="email" id="email" value="{{ old('email') }}">
	        		@if($errors->first('email'))
		    			<span><small>*{{ $errors->first('email') }}</small></span>
		    			<br>
		    		@endif
	        	</div>
	        	<div>
	        		<label for="password">Password:</label>
	        		<input type="password" name="password" id="password">
	        		@if($errors->first('password'))
		    			<span><small>*{{ $errors->first('password') }}</small></span>
		    			<br>
		    		@endif
	        	</div>
	        	<div>
	        		<label for="password_confirmation">Confirm Password:</label>
	        		<input type="password" name="password_confirmation" id="password_confirmation">
	        	</div>

	        	<input type="submit" value="Register">
	        </form>

	    </div>
	</div>

@endsection