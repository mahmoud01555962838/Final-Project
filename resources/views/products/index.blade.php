<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body style="   color: #353535;
font-family: 'Open Sans', sans-serif;
font-weight: 400;
background: #f3f6ff; ">

@extends('master')

@section("content")



 <div class="container w-100 text-center ">
<div class="row d-flex justify-content-center " >
{{--   <div class="col-2 d-none d-lg-block">
    <img src="{{ asset('images/birthday.jpg') }}" class="d-block w-100 m-3 " style="height: 14rem" alt="...">
    <img src="{{ asset('images/flower2.jpg') }}" class="d-block w-100 m-3" style="height: 14rem" alt="...">
  </div> --}}
        <div id="carouselExampleControls" class="carousel slide col-7 " data-bs-ride="carousel">
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <img src="{{ asset('images/slider3.jpg') }}" class="d-block w-100 m-3" style="height: 29rem" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/giftflower1.jpg') }}" class="d-block w-100 m-3" style="height: 29rem" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/handmade1.jpg') }}" class="d-block w-100 m-3" style="height: 29rem" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      <div class="col-4 m-3 bg-light" style="float: right ; text-align: right ">

        <ul class="container  mt-5 " style="list-style-type: none; ">
          <span class="fs-3 ms-3">الرئيسيه</span> <i class="fa-solid fa-house" style="color: #FF6F61;"></i>
          @foreach(\App\Models\Category::all() as $data)
          <a href="{{route("categorys.show",[$data->id])}}" style="text-decoration: none; "> <li class=" bold text-black"> <span class="fs-3 ms-3">  {{$data->name}}</span> <i class="fa-solid fa-arrow-left" style="color: #FF6F61"></i></li></a>
          @endforeach
        </ul>
      </div>
</div> 
</div> 

      <!-- Feature End-->      
      
{{-- --category-- --}}
<div class="category">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="category-item ch-400">
                  <img src="{{ asset('images/handmade1.jpg') }}" />
                  <div class="category-name">

                     {{--  <p>{{$category->name}}</p> --}}
                      <a href="categorys/{{4}}" class="btn btn-info mx-auto">تسوق الان</a>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
            <div class="category-item ch-400">
                <img src="{{ asset('images/tara.jpg') }}" />
                <div class="category-name" >
                   
                    <a href="categorys/{{5}}" class="btn btn-info mx-auto">تسوق الان</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="category-item ch-400">
              <img src="{{ asset('images/images.jpg') }}" />
              <div class="category-name">
                  <a href="categorys/{{3}}" class="btn btn-info mx-auto">تسوق الان</a>
              </div>
          </div>
      </div>
      
  
      </div>
  </div>
</div>
<!-- Category End-->      

{{-- 
      <div class="card mt-5 container" >
        <div class="card-body" >
        @foreach(\App\Models\Category::all() as $data)
        <div class="container h-100 row ">
          <a href="categorys/{{$data->id}}" class="btn" >
            <h2 class="fs-3 m-5 text-center " style="background-color: blueviolet; color:orange">{{$data->name}}</h2>
          </a>
        @foreach($data->products as $dataphoto)
            <div class="col-md-2 w-30 ">
              <a href="{{route("products.show",[$dataphoto->id])}}">
                <img class="w-100 rounded-4" src="{{Storage::url($dataphoto->photo)}}" alt="ramez">
              </a>
            </div>
            @endforeach
        </div>
        @endforeach
      </div>
      </div>  --}}
      
      <section >
        <div class="text-center container py-5">
          <h2 class="mt-4 mb-5 fs-1"><strong class="justify-content-end"> {{$cat->name}} </strong></h2>
      
          <div class="row">

            @foreach($cat->products as $data )

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="{{Storage::url($data->photo)}}"
                    class="w-100" style="height: 15rem" />
                  <a href="#!">
               
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  
                    <h4 class="card-title mb-3">{{$data->name}}</h4>
                 
    
                  
                  <h5 class="mb-3">{{$data->price}}EGP</h5>
                   <div class="d-grid gap-2 col-6 mx-auto"> 
                  <a href="{{route("products.show",[$data->id])}}" class="btn fs-4" style="background-color: black ; color: #FF6F61">التفاصيل</a>
                  <a href="" class="btn fs-4" style="background-color: #FF6F61">اضف الي السله</a>
                </div> 
                </div>
              </div>
            </div>
            @endforeach
          </div>
      

        </div>
      </section>

      
        <!-- Feature Start-->
        <div class="feature m-4 " style="position: relative;">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-3 col-md-6 feature-col" style="  margin-bottom: 30px;">
                      <div class="feature-content" style="    position: relative;
                      width: 100%;
                      height: 100%;
                      padding: 30px 15px;
                      text-align: center;
                      background: #ffffff;">
                          <i class="fab fa-cc-mastercard" style="    color: #FF6F61;
                          font-size: 60px;
                          margin-bottom: 30px;"></i>
                          <h2 style=" font-size: 18px;">Secure Payment</h2>
                          <p style="   font-size: 15px;
                          margin: 0;">
                              Lorem ipsum dolor sit amet consectetur elit
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 feature-col" style="  margin-bottom: 30px;">
                      <div class="feature-content" style="    position: relative;
                      width: 100%;
                      height: 100%;
                      padding: 30px 15px;
                      text-align: center;
                      background: #ffffff;">
                          <i   class="fa fa-truck" style="    color: #FF6F61;
                          font-size: 60px;
                          margin-bottom: 30px;"></i>
                          <h2 style=" font-size: 18px;">Worldwide Delivery</h2>
                          <p style="   font-size: 15px;">
                              Lorem ipsum dolor sit amet consectetur elit
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 feature-col" style="  margin-bottom: 30px;">
                      <div class="feature-content" style="    position: relative;
                      width: 100%;
                      height: 100%;
                      padding: 30px 15px;
                      text-align: center;
                      background: #ffffff;">
                          <i   class="fa fa-sync-alt" style="    color: #FF6F61;
                          font-size: 60px;
                          margin-bottom: 30px;"></i>
                          <h2 style=" font-size: 18px;">90 Days Return</h2>
                          <p style="   font-size: 15px;">
                              Lorem ipsum dolor sit amet consectetur elit
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6 feature-col" style="  margin-bottom: 30px;">
                      <div class="feature-content" style="    position: relative;
                      width: 100%;
                      height: 100%;
                      padding: 30px 15px;
                      text-align: center;
                      background: #ffffff;">
                          <i   class="fa fa-comments" style="    color: #FF6F61;
                          font-size: 60px;
                          margin-bottom: 30px;"></i>
                          <h2 style=" font-size: 18px;">24/7 Support</h2>
                          <p style="   font-size: 15px;">
                              Lorem ipsum dolor sit amet consectetur elit
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <section style="background-color: #eee;">
        <div class="text-center container py-5">
          <h2 class="mt-4 mb-5 fs-1"><strong class="justify-content-end"> {{$cat2->name}} </strong></h2>
      
          <div class="row">

            @foreach($cat2->products as $data )

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                  data-mdb-ripple-color="light">
                  <img src="{{Storage::url($data->photo)}}"
                    class="w-100" style="height: 15rem" />
                  <a href="#!">
               
                    <div class="hover-overlay">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </div>
                  </a>
                </div>
                <div class="card-body">
                  
                    <h4 class="card-title mb-3">{{$data->name}}</h4>
                 
    
                  
                  <h5 class="mb-3">{{$data->price}}EGP</h5>
                   <div class="d-grid gap-2 col-6 mx-auto"> 
                  <a href="{{route("products.show",[$data->id])}}" class="btn fs-4" style="background-color: black ; color: #FF6F61">التفاصيل</a>
                  <a href="" class="btn fs-4" style="background-color: #FF6F61">اضف الي السله</a>
                </div> 
                </div>
              </div>
            </div>
            @endforeach
          </div>
      

        </div>
      </section>
      <div>
       
      </div>
@endsection
