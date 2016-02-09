@extends('master')

@section('title', 'Contact')
@section('meta-description', 'Log into Tweet.2')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	            <div class="title">tweet.2</div>
	            <div class="secondaryTitle">LOG IN</div>
	        </div>

	        <form action="/login" method="post">

	        {!! csrf_field() !!}

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
	        	</div>
	        	
	        	<input type="submit" value="Log In">

	        </form>

	    </div>
	</div>

@endsection