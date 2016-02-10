@extends('master')

@section('title', 'Contact')
@section('meta-description', 'Welcome to your account')

@section('content')
	
	<div class="index">
	    <div class="container">
	        <div class="content">
	            <div class="title">tweet.2</div>
	            <div class="secondaryTitle">HELLO, {{ \Auth::user()->name }}</div>
	        </div>
	    </div>
	</div>

@endsection