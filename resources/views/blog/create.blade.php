@extends('blog.layout')

@section('main_content')
@if(Auth::check())
@include('blog.error')
<form method="POST" action="/post">
  <div class="form-group">
    {{csrf_field()}}
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" id="body" name="body"></textarea>
    <!-- <input type="password" class="form-control" id="body"> -->
  </div>

  <button type="submit" class="btn btn-success">Publish</button>
</form>
@else
@include('blog.authcheck')
@endif

@endsection