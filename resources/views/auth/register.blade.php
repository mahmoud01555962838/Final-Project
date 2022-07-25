@extends('layouts.app')

@section('content'){{-- 
<div class="container ">
    <div class="row justify-content-center">
        <div class="col col-lg-8 ">
            <div class="card rounded-pill  ">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end"></label>


                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                <input id="name" type="text" placeholder="@lang('الأسم بالكامل...')" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-2 col-form-label text-md-end"></label>
                            <div class="col-md-8">
                                <div class="input-group">

                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                    <input id="email" type="email" placeholder="@lang('الأيميل...')" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="mobile" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-8">

                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile-screen-button"></i></span>
                                    <input id="mobile" type="tel"  placeholder= "@lang(' الموبايل...')" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                <input id="password" type="password"  placeholder="@lang('كلمة السر...')" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-end"></label>

                            <div class="col-md-8">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                                <input id="password-confirm" type="password" placeholder="@lang('اعادة كلمة السر...')"class="form-control " name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-warning bg-gradient rounded-pill btn-lg " >
                                    {{ __('التسجيل') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col col-md-3 ms-md-auto col align-self-center">

           <h1>هديتك </h1>
           <h2 style="color: #fff">لجميع هدايا المناسبات </h2>

          </div>
    </div>
</div> --}}

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="https://img.freepik.com/free-photo/3d-balloons-present-box_23-2148993002.jpg?size=338&ext=jpg&uid=R74588280&ga=GA1.2.1962951420.1654178290" class="w-100 rounded-4 shadow-4"
              alt="" />
          </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">التسجيل</h2>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
         <!-- name input -->
                <div class="form-outline mb-4">
                    <input type="text" 
                    id="name"  placeholder="@lang('الأسم بالكامل...')" class=" form-control rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                    />
                    <label class="form-label mt-2 fs-5" for="form3Example3">الاسم بالكامل</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                  </div>
                     <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input 
                    id="email" type="email" placeholder="@lang('الأيميل...')" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                     />
                    <label class="form-label mt-2 fs-5" for="form3Example3">الايميل</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  {{-- mobile --}}
                  <div class="form-outline mb-4">
                    <input  id="mobile" type="tel"  placeholder= "@lang(' الموبايل...')" class="form-control rounded-pill @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required />
                    <label class="form-label mt-2 fs-5" for="form3Example3">رقم الموبايل</label>
                    @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
             {{-- passward --}}
             <div class="form-outline mb-4">
                <input 
                id="password" type="password"  placeholder="@lang('كلمة السر...')" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"/>
                <label class="form-label mt-2 fs-5" for="form3Example4">كلمة السر</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>
  
                <!-- Password confimation -->
                <div class="form-outline mb-4">
                  <input 
                  id="password-confirm" type="password" placeholder="@lang('اعادة كلمة السر...')"class="form-control rounded-pill " name="password_confirmation" required autocomplete="new-password" />
                  <label class="form-label mt-2 fs-5" for="form3Example4">اعادة كلمة السر</label>
                </div>
  
            
       
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 rounded-pill">
                    {{ __('التسجيل') }}
                </button>
  
        
              </form>
            </div>
          </div>
        </div>
  
        
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

@endsection
