<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">
	 <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{ route('home') }}">Car Rental Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('home') }}"> Home </a>
            </li>
            <li class="nav-item active ">
              <a class="nav-link" href="{{ route('cars') }}">Cars</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
            </li>
			 <li class="nav-item active">
              <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
            </li>
          </ul>
			 <!-- Authentication Links -->
                        @guest
                                <a class="btn btn-primary" href="{{ route('login') }}" style="margin-right: 20px;padding-right: 21px;padding-left: 21px;">{{ __('Login') }}</a>

                            @if (Route::has('register'))
                                    <a class="btn btn-primary" href="{{ route('register') }}" >{{ __('Register') }}</a>

                            @endif
                        @else

                                <a id="navbarDropdown" class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->role === 2 || Auth::user()->role === 1)
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    @else

                                    @endif

                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="#">My rents</a>
                                    <a class="dropdown-item" href="#">Status</a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>

                        @endguest
        </div>
      </nav>
    </header>
	<main role="main">
		@yield('carousel')

    <div class="container">

      @yield('Body')

    </div>


      <!-- FOOTER -->
      <footer class="container-fluid">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>Copyright © <?php echo date("Y"); ?> Laravel CarRental3 <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    </main>

</html>
