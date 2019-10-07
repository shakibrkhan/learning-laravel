<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>
      @if (View::hasSection ('pageTitle') )
          @yield('pageTitle')
      @else
          {{ config('app.name') }}
      @endif
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </head>
  <body>

    <!-- navigation bar -->
    <div class="container-fluid">
      <div class="row">
          <nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-custom">
              <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('resigter') }}">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
              </ul>
              <form class="form-inline" action="/action_page.php">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-success" type="submit">Search</button>
              </form>
          </nav>
      </div>
    </div>
    <!-- navigation bar ends here -->

    @yield('content')

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>