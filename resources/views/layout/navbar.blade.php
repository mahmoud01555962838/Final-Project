{{-- 
<nav class="navbar navbar-expand-lg bg-info navbar-dark" style="">
    <div class="container">
      <a class="navbar-brand text-warning" href="{{ url('/') }}">{{ config('app.name') }}<i class="fa fa-gift"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa fa-user"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <ul class="navbar-nav ms-auto">

            @foreach(\App\Models\Category::all() as $data)
            <a class="nav-link" href="categorys/{{$data->id}}">{{$data->name}}</a>
            @endforeach
        </ul>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">بحث</button>
          </form>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('التسجيل') }}</a>
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
  </nav> --}}

  
<nav class="navbar navbar-expand-lg " style="background-color:#1AC0C6">
    <div class="container">
      <a class="navbar-brand text-warning fs-2" href="{{ url('/') }}">{{ config('app.name') }}<i class="fa-solid fa-gift fa-2xl fa-beat"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa fa-user"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

{{--         <ul class="navbar-nav ms-auto">

            @foreach(\App\Models\Category::all() as $data)
            <a class="nav-link" href="categorys/{{$data->id}}">{{$data->name}}</a>
            @endforeach
        </ul> --}}

{{--         <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">بحث</button>
          </form> --}}
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav me-auto">
            <!-- Authentication Links -->
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


  <div class="row d-flex justify-content-center text-center container mt-2 " style=" margin: auto">
  <nav class="navbar col-4">
    <div class="container fluid">
      <form class="d-flex" role="search">
        <input type="search" placeholder="&#128270;" aria-label="Search">
        <button class="btn btn-outline-light bg-warning" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </div>

  <div class="row d-flex justify-content-center text-center m-3" style="background-color:#D9D2D2">
    <nav class="navbar col-12">
      <div class="container">
        @foreach(\App\Models\Category::all() as $data)
        <a class="nav-link text-black fs-3" href="{{route("categorys.show",[$data->id])}}">{{$data->name}}</a>
        @endforeach
      </div>
    </nav>
    </div>
    