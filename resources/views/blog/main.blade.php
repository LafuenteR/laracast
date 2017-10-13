@extends('blog.layout')

@section ('main_content')

			@foreach ($posts as $post)
			@foreach($accounts as $account)
            @if($account->id === $post->user_id)
             <a href="/post/{{$post->id}}" class="blog-post-title">{{$post->title}}</a>
            <p class="blog-post-meta">{{$account->name}} <span>{{$post->created_at->diffForHumans()}}</span></p>
            <p>{{$post->body}}</p>
            @endif
         @endforeach
         	<hr>
         @endforeach
         <!--  <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> -->


        
@endsection