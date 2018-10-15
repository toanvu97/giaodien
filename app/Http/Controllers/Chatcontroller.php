<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Request;
use App\Chat;
use App\Like;
use App\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Chatcontroller extends Controller
{
    public function getDashboard(){
    	$posts = Chat::orderBy('created_at','desc')->get();
    	return view('ChatBot',['posts'=>$posts]);
    }

    public function postCreatePost(Request $request)
    {

    	$this->validate($request,
    		[
    			'body' => 'required|max:1000'
    		]);
    	$post = new Chat();
    	$post->body = $request['body'];
    	$message = 'this error';
    	if ($request->user()->chats()->save($post)) {
    		# code...th()
    		$message = "message send successfully"
    	}
    	return redirect()->route('dashboard')->with(['message' => $message]);
    }
}
