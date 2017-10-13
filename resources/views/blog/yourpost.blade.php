@extends('blog.layout')

@section('main_content')
@foreach($posts as $post)

@if($post->user_id === Auth::user()->id)
 <a href="/post/{{$post->id}}" class="blog-post-title">{{$post->title}}</a>
  <p class="blog-post-meta"><span>{{$post->created_at->diffForHumans()}}</span></p>
  <p>{{$post->body}}</p>
@endif


@endforeach

@endsection