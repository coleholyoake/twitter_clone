<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet;
use App\User;

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
}
