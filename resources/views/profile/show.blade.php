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
	        <hr>
	        <h3>Tweets = {{ $user->tweets->count() }}</h3>
	        <hr>

	            @foreach( $userTweets as $tweet)
	            <article class="tweet">
	            	<br>
	            	@if( \Auth::check() && $tweet->user->id == \Auth::user()->id )
	            	<a class="delete" href="/profile/delete-tweet/{{ $tweet->id }}">x</a>
	            	@endif 
	            	<h2>{{ $tweet->content }}</h2>
					<small>Posted <strong>{{ $tweet->created_at }}</strong> by <strong>&commat;{{ $tweet->user->username }}</strong></small>
	            	
	            	<br><br>

	            	<h3><i>Comments</i></h3>

	            	@if(\Auth::check())
	            	<form class="commentform" action="/profile/new-comment" method="post">

		            {!! csrf_field() !!}

		            	<div>
		            		<input type="hidden" name="tweet-id" value="{{ $tweet->id }}">
		            		<label for="comment">Write a comment here</label>
		            		<textarea name="comment" id="comment" rows="5">{{ old('comment') }}</textarea>
		            		@if($errors->first('comment'))
			    			<span><small>*{{ $errors->first('comment') }}</small></span>
			    			@endif
		            	</div>
		            	<input type="submit" value="Comment">
		            </form>
		            @endif

	            	@forelse( $tweet->comments as $comment)
	            		<article class="comment">
	            			<p>- {{ $comment->content }}</p>
	            			<small>Posted <strong>{{ $comment->created_at }}</strong> by <strong>&commat;{{ $comment->user->username }}</strong></small>
	            			@empty
	            			<p>Be the first to comment!</p>
	            		</article>
	            	@endforelse
	            	<hr>
	            </article>
	            @endforeach
	        </div>
	    </div>
	</div>

@endsection