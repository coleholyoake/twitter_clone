<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet;
use App\User;
use App\Comment;

class ProfileController extends Controller
{
    public function index() {

    	//count total tweets
    	$totalTweets = \Auth::user()->tweets()->count();

    	// return view('account/new-tweet');

    	return view('profile.index', compact('totalTweets'));
    }

    public function newTweet(Request $request) {

    	$this->validate($request, [
    			'content'=>'required|min:3|max:140'
    		]);

    	$newTweet = new Tweet();

    	$newTweet->content = $request->content;
    	$newTweet->user_id = \Auth::user()->id;

    	$newTweet->save();

    	return redirect('profile');
    }

    public function show($username) {

    	//find the user
    	$user = User::where('username', '=', $username)->firstOrFail();

    	$userTweets = $user->tweets()->get();

    	return view('profile.show', compact('user', 'userTweets'));
    }

    public function newComment(Request $request) {

    	$this->validate($request, [
    		'comment'=>'required|min:3|max:140',
    		'tweet-id'=>'required|exists:tweets,id'
    		]);

    	$comment = new Comment();

    	$comment->content = $request->comment;
    	$comment->user_id = \Auth::user()->id;
    	$comment->tweet_id = $request['tweet-id'];

    	$comment->save();

    	return back();
    }

    public function deleteTweet($id) {

    	$tweet = Tweet::findOrFail($id);

    	//check if the logged in user owns this tweet
    	if( $tweet->user_id != \Auth::user()->id ) {
    		return 'not yours';
    	}

    	return view('profile.confirm_tweet_delete', compact('tweet'));
    }

    public function destroyTweet($id) {

    	$tweet = Tweet::findOrFail($id);

    	//check if the logged in user owns this tweet
    	if( $tweet->user_id != \Auth::user()->id ) {
    		return 'not yours';
    	}

    	$tweet->delete();

    	return redirect('profile/'.$tweet->user->username());

    }
}





