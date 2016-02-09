@extends('master')

@section('title', 'Register')
@section('meta-description', 'Register to twe two')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	        	<div class="title">tweet.2</div>
	            <div class="secondaryTitle">REGISTER</div>
	        </div>
	    
	        <form action="" method="post">

	        {!! csrf_field() !!}

	        	<div>
	        		<label for="name">Name:</label>
	        		<input type="text" name="name" id="name">
	        	</div>
	        	<div>
	        		<label for="email">Email:</label>
	        		<input type="email" name="email" id="email">
	        	</div>
	        	<div>
	        		<label for="password">Password:</label>
	        		<input type="password" name="password" id="password">
	        	</div>
	        	<div>
	        		<label for="confirm_password">Confirm Password:</label>
	        		<input type="password" name="confirm_password" id="confirm_password">
	        	</div>

	        	<input type="submit" value="Register">
	        </form>

	        @if(count($errors))
	        	<ul>
	        		@foreach($errors->all() as $error)
	        			<li>{{ $error }}</li>
	        		@endforeach
	        	</ul>
	        @endif

	    </div>
	</div>

@endsection