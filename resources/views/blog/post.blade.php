@extends('blog.layout')

@section('main_content')
	@if(Auth::check())
	<h1 class="blog-post-title text-primary blogpost">{{$post->title}}</h1>
	@foreach($accounts as $account)
	 @if($account->id === $post->user_id)
	<p class="blogpost">{{$account->name}}<span>{{$post->created_at->diffForHumans()}}</span></p>
	@endif
	@endforeach
	<p class="blogpost">{{$post->body}}</p>
	@include('blog.editform')
	 @if(Auth::user()->id === $post->user_id) 
	 	<a id="editButton" href="#" class="btn btn-success btn-sm">Edit</a>   
        <a id="deleteButton" href="/delete/{{$post->id}}" class="btn btn-danger btn-sm">Delete</a>
      @endif
	<hr>
	<form id="form-comment" action="/comment" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<textarea name="comment" class="form-control" placeholder="Comment"></textarea>
		</div>
		<input type="hidden" name="postId" value="{{$post->id}}">
		<input type="submit" name="edit" value="Comment" class="btn btn-success btn-sm" style="float: right;">
	</form> 
	<hr>
	@foreach($comments as $comment)
	@foreach($accounts as $account)
	@if(($post->id === $comment->post_id)&&($account->id === $comment->user_id))
	<div class="panel panel-danger">
		<h5>{{$account->name}} <span>{{$comment->created_at->diffForHumans()}}</span></h5>	
		<p>{{$comment->comment}}</p>
	</div>
	@endif
	@endforeach
	@endforeach
	@else
	@include('blog.authcheck')
	@endif
@endsection