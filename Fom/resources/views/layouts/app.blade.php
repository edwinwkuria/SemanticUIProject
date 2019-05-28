<!DOCTYPE html>
<head>
    <title>Semantic UI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.js"></script>
</head>
<body>
      <!-- This is the menu tab -->
      <div class="ui attached stackable inverted menu">
        <div class="item"><img src="images/logo.png"></div>
        <a class="item" href="{{ url('/') }}">Home </a>
        <div class="ui dropdown item">
          Categories
          <i class="dropdown icon"></i>
          <div class="menu">
            <div class="item">Concerts</div>
            <div class="item">Expos</div>
            <div class="item">Festivals</div>
          </div>
        </div>
        
        <div class="right menu">
        @guest
          <a class="item" href="{{ route('login') }}">Log in </a>
          @if (Route::has('register'))
          <a class="item" href="{{ route('register') }}">Sign up</a>
          @endif
        @else
        <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        @endguest
        </div>
      </div>
@yield('content')
</body>
</html>