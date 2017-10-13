<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\User;
use App\Comment;
use Carbon\Carbon;

class PostController extends Controller
{
    public function post(Request $request){
    	$this->validate(request(),[
    			'title' => 'required',
    			'body' => 'required'
    		]);
    	$new_post = new Post;
    	$new_post->title = $request->title;
    	$new_post->user_id = Auth::user()->id;
    	$new_post->body = $request->body;
    	$new_post->save();
    	session()->flash('message','Your Post have been published');
    	// return back();

    	return redirect ('/');
    }
    public function addcomment(Request $request){
    	$this->validate(request(),[
    		'comment' => 'required']);
    	$new_comment = new Comment;
    	$new_comment->post_id = $request->postId;
    	$new_comment->user_id = Auth::user()->id;
    	$new_comment->comment = $request->comment;
    	$new_comment->save();
    	session()->flash('message','Your comment has been sent');
    	return back();
    }
    public function displayUser(){
        $accounts = User::all();
        return view('blog.admin',compact('accounts'));
    }
    public function displayPost(){
  
    	$posts = Post::latest(); 	
    	$accounts = User::all();
    	if($month = request('month')){
    		$posts->whereMonth('created_at',Carbon::parse($month)->month);
    	}
    	if($year = request('year')){
    		$posts->whereYear('created_at',$year);
    	}
    	$posts = $posts->get();
    	return view('blog.main',compact('posts','accounts'));
    }
    public function singlePost($id){
    	$post = Post::find($id);
    	$accounts = User::all();
    	$comments = Comment::latest()->get();
    	return view('blog.post',compact('post','accounts','comments'));
    }
    public function yourpost(){
        $posts = Post::all();
        return view('blog.yourpost',compact('posts'));
    }

    public function create(){
      	return view('blog.create');
      }
    public function deletepost($id){
   
        $delete = Post::find($id);
        $delete->delete();
        session()->flash('message','Your post has been deleted');
        return redirect('/');
  } public function editpost($id,Request $request){
        $editpost = Post::find($id);
        $editpost->title = $request->edit_title;
        $editpost->body = $request->editbody;
        $editpost->save();
        session()->flash('message','Your post has been updated');
        return back();
  }

}
