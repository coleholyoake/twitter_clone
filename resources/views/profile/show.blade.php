@extends('master')

@section('title', 'Profile')
@section('meta-description', 'profile')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">

	            <div class="title">tweet.2</div>
	            <div class="secondaryTitle">&commat;{{ $user->username }}</div><br>
	            <img src="" width="120" height="120">
	            <p class="description">{{ $user->description }}Lorem ipsum dolor sit amet, ctetur adiicing elit, sed do eiusmod
	            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
	            quis</p>
	            <p class="description">{{ $user->website }}Lorem ipsum dolor sit amet,</p>
	        </div>
	            
	        <div class="content">
	        <h3>Tweets = {{ $user->tweets->count() }}</h3>

	            @foreach( $userTweets as $tweet)
	            <article class="tweet">
	            	<p>{{ $tweet->content }}</p>
	            	<small>Posted <strong>{{ $tweet->created_at }}</strong> by <strong>{{ $tweet->user->name }}</strong></small>
	            	<hr>
	            </article>
	            @endforeach
	        </div>
	    </div>
	</div>

@endsection