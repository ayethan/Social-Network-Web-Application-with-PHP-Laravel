<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
	 public function getDashboard()
	{
	  $posts = Post::orderBy('created_at','desc')->get();
      return view('dashboard',['posts' => $posts]);
    }

    public function postCreatePost(Request $request)
	{
		$this->validate($request,[
            'body' => 'required|max:1000'
			]);
		$post = new Post();
		$post->body = $request['body'];
		$message = 'There was an errer';	
		if ($request->user()->posts()->save($post)){
			$message = 'Post successfully created!';

		}

		return redirect()->route('dashboard')->with(['message'=>$message]);
	}
	public function getDeletePost($post_id)
	{
		$post = Post::where('id', $post_id)->first();
		if (Auth::User() != $post->user) {

			return redirect()->back();
		}
		$post->delete();
		return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!']);
	}
}
	