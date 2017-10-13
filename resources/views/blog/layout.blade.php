<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>

  <body>
  @include('blog.navbar')
  @include('blog.header')
  @if($flash = session('message'))
  <div class="alert alert-success">{{$flash}}</div>
  @endif
  <div class="container">

    <div class="row">

    <div class="col-sm-8 blog-main">
    @yield('main_content')
    </div><!-- /.blog-main -->

    @include('blog.sidebar')
    </div><!-- /.row -->

  </div><!-- /.container -->
  @include('blog.footer')

  <script type="text/javascript">
    $('#editform').hide();
    $("#editButton").click(function(){
      $('.blogpost').hide();
      $('#deleteButton').hide();
      $('#editButton').hide();
      $('#form-comment').hide();
      $('#editform').show();
});
    $("#cancelEdit").click(function(){
      $('.blogpost').show();
      $('#deleteButton').show();
      $('#editButton').show();
      $('#form-comment').show();
      $('#editform').hide();
});
  </script>
  </body>
</html>
