@extends('master')

@section('title', 'Contact')
@section('meta-description', 'Welcome to your account')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	            <div class="title">tweet.2</div>
	            <div class="secondaryTitle">HELLO, {{ \Auth::user()->name }}</div>
	            <br>
	           	<ul>
	           		{{-- <li>Total Tweets = {{ $totalTweets }}</li> --}}
	           	</ul>
	        </div>
	        <form action="account/new-tweet" method="post">

	            {!! csrf_field() !!}

	            	<div>
	            		<label for="content">Write a tweet here</label>
	            		<textarea name="content" id="content" rows="5">{{ old('content') }}</textarea>
	            		@if($errors->first('content'))
		    			<span><small>*{{ $errors->first('content') }}</small></span>
		    		@endif
	            	</div>
	            	<input type="submit" value="Tweet">
	            </form>
	    </div>
	</div>

@endsection