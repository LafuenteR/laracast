<div class="blog-masthead">
      <div class="container">
        <nav class="nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/yourpost">Your Post</a>
          @if(Auth::check())
          @if(Auth::user()->role != 'regular')
          <a class="nav-link" href="/admin">Admin</a>
          @endif
          @endif
          <a class="nav-link" href="/create">Create</a>
          @if(Auth::check())
          <a class="nav-link ml-auto" href="/">{{Auth::user()->name}}</a>
           <a class="nav-link" href="{{ route('logout') }}"
          onclick="event.preventDefault();document.getElementById('logout-form').submit();"> Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}
          </form>
          @else
           <a class="nav-link ml-auto" href="/login">Login</a>
          @endif
        </nav>
      </div>
    </div>