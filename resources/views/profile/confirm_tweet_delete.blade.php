@extends('master')

@section('title', 'Are you sure?')
@section('meta-description', 'Are you sure you want to delete that tweet')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	            <div class="title">tweet.2</div>
	            <div class="secondaryTitle">ARE YOU SURE?</div>
	        </div>
	        <div class="content">
	        	<article class="tweet">
	        		<p>You are about to <strong>permanantly</strong> delete the following tweet:</p><br><br>
	        		<h2>{{ $tweet->content }}</h2>
					<small>Posted <strong>{{ $tweet->created_at }}</strong> by <strong>&commat;{{ $tweet->user->username }}</strong></small>
					<br><br><br><br><br>
					<p class="deleteconfirm"><a class="deleteconfirm" href="/profile/delete-tweet/{{ $tweet->id }}/confirm">Yes</a>&nbsp; &nbsp; &nbsp;|&nbsp; &nbsp; &nbsp;<a class="deleteconfirm" href="/profile/{{ $tweet->user->username }}">No I would not like to!</a></p>
	        	</article>
	        </div>

	    </div>
	</div>

@endsection