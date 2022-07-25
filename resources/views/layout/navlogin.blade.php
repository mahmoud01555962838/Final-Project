<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <title> {{ config('app.name','هديتك') }} @yield('title') </title>

    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 @yield('css')
</head>
<body>
  
<nav class="navbar navbar-expand-lg " >
    <div class="container">
      <a class="navbar-brand text-warning fs-2" href="{{ url('/') }}">{{ config('app.name') }}<i class="fa-solid fa-gift fa-2xl fa-beat"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa fa-user"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <ul class="navbar-nav me-auto">
          
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link text-warning fs-3" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item  ">
                        <a class="nav-link text-warning fs-3" href="{{ route('register') }}">{{ __('التسجيل') }}</a>
                    </li>
                @endif
            @else

                @if (Route::has('cart'))
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('cart') }}"><i class="text-warning fa fa-cart-plus fa-2x"></i></a>
                    </li>
                @endif
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>


      </div>
    </div>
  </nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>



@yield('js')
</body>
</html>