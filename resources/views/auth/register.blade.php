@extends('layouts.app')

@section('content')
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
</div>
@endsection
