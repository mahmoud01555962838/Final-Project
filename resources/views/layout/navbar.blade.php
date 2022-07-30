

<nav class="navbar navbar-expand-lg p-2 mb-6" style="background: #f32786;">
    <div class="container">
      <a class="navbar-brand fs-1" style="color: black" href="{{ url('/') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa fa-user"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <ul class="navbar-nav me-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link fs-3" style="color: black" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item  ">
                        <a class="nav-link fs-3" style="color: black" href="{{ route('register') }}">{{ __('التسجيل') }}</a>
                    </li>
                @endif
            @else

                @if (Route::has('cart'))
                    <li class="nav-item  ">
                        <a class="nav-link" href="{{ route('cart') }}" style="color: black"><i class=" fa fa-cart-plus fa-2x"></i></a>
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

  <form class="input-group rounded container mt-4 mb-3" method="get" action="{{route("search")}}">
    @csrf
    <input type="search" class="form-control rounded" name="query"  placeholder="بحث بالمنتج" aria-label="Search" aria-describedby="search-addon" style="height: 3rem" />
    <button class="input-group-text border-0 " id="search-addon" >
      <i class="fas fa-search" ></i>
  </button>
  </form>
 {{--  <div class="row d-flex justify-content-center text-center container" >
  <nav class="navbar col-4"> --}}

     {{--  <div class="form-outline mb-4">
        <input type="search" class="form-control" id="datatable-search-input">
        <label class="form-label" for="datatable-search-input">Search</label>
      </div> --}}
     {{--  <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="بحث بالمنتج" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}

  {{-- </nav>
  </div>  --}}

 {{--  <div class="row d-flex justify-content-center text-center m-3" style="background-color:#D9D2D2">
    <nav class="navbar col-12">
      <div class="container">
        @foreach(\App\Models\Category::all() as $data)
        <a class="nav-link text-black fs-3" href="{{route("categorys.show",[$data->id])}}">{{$data->name}}</a>
        @endforeach
      </div>
    </nav>
    </div>
     --}}
