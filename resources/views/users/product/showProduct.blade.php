@extends('master')
@section("content")
{{--     <div class="container">
        <div class="row py-5">
            <div class="col-md-7  py-5">
                <label style="color: #FFA822" class="fs-2">اسم المنتج:</label>
                <h3 class="fs-4">{{$data->name}}</h3>
                <label style="color: #FFA822" class="fs-2">الوصف:</label>
                <p class="fs-4">{{$data->description}}</p>
                <label style="color: #FFA822" class="fs-2">السعر:</label>
                <h3 class="fs-4">{{$data->price}}EGP</h3>
                <a href="#" class="btn " style="background:#134E6F; color: #FFA822 ">اضف الي السله</a>

            </div>
            <div class="col-md-5 w-100">
                <img class=" rounded-4" src="{{Storage::url($data->photo)}}" alt="ramez">
            </div>


        </div>
    </div>
</div> --}}
 <link rel="stylesheet" href="{{ asset('css/showproduct.css') }}">

<div class="container mt-5 ">

    <!-- Portfolio Item Heading -->


  {{--   <h1 class="my-4">Page Heading

    </h1> --}}

    <!-- Portfolio Item Row -->
    <div class="row">
        <div class="container mt-5 mb-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-0"> <img id="main-image" src="{{\Storage::url($data->photo)}}" width="100%" height="100%" /> </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center"> <a class="text-decoration-none text-black" href="{{ url('/') }}"><i class="fa fa-long-arrow-left"></i> <span class="ml-1">رجوع</span></a> </div>
                                    </div>
                                    <div class="mt-4 mb-3"> 
                                        <h5 class="text-uppercase">{{$data->name}}</h5>
                                        <div class="price d-flex flex-row align-items-center"> <span class="act-price">{{$data->price}}EGP</span>
                                        </div>
                                    </div>
                                    <p class="about">{{$data->description}}.</p>
                                    <form method="post" action="{{ route('add_to_cart',$data) }}"  >
                                    <div class="sizes mt-5">
                                        <h6 class="text-uppercase">الحجم</h6> <label class="radio"> <input type="radio" name="size" value="S" checked> <span>S</span> </label> <label class="radio"> <input type="radio" name="size" value="M"> <span>M</span> </label> <label class="radio"> <input type="radio" name="size" value="L"> <span>L</span> </label> <label class="radio"> <input type="radio" name="size" value="XL"> <span>XL</span> </label> <label class="radio"> <input type="radio" name="size" value="XXL"> <span>XXL</span> </label>
                                    </div>
                                        @csrf
                                    <div class="cart mt-4 align-items-center"> <button class="btn btn-danger text-uppercase mr-2 px-4">اضف الي السله</button>  </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
{{-- review --}}
{{-- 1 --}}
<section style="color: #000; background-color: #f3f2f2;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h3 class="fw-bold mb-4">تقيم المنتج</h3>
          {{-- <p class="mb-4 pb-2 mb-md-5 pb-md-0">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
            numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
            quisquam eum porro a pariatur veniam.
          </p> --}}
        </div>
      </div>
  
      <div class="row text-center">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card">
            <div class="card-body py-4 mt-2">
              {{-- <div class="d-flex justify-content-center mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                  class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div> --}}
              <h5 class="font-weight-bold">Teresa May</h5>
              <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star-half-alt fa-sm text-info"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                ad velit ab hic tenetur.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card">
            <div class="card-body py-4 mt-2">
            {{--   <div class="d-flex justify-content-center mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                  class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div> --}}
              <h5 class="font-weight-bold">Maggie McLoan</h5>
              <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                labore laboriosam.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-0">
          <div class="card">
            <div class="card-body py-4 mt-2">
             {{--  <div class="d-flex justify-content-center mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                  class="rounded-circle shadow-1-strong" width="100" height="100" />
              </div> --}}
              <h5 class="font-weight-bold">Alexa Horwitz</h5>
              <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
              <ul class="list-unstyled d-flex justify-content-center">
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="fas fa-star fa-sm text-info"></i>
                </li>
                <li>
                  <i class="far fa-star fa-sm text-info"></i>
                </li>
              </ul>
              <p class="mb-2">
                <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                vestibulum in tempus viverra turpis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- end1 --}}

<div {{-- style="display: grid;
place-items: center;
font-family: 'Manrope', sans-serif;">
<div class="card" style="position: relative;
display: flex;
flex-direction: column;
min-width: 0;
padding: 20px;
width: 450px;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border-radius: 6px;
-moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)" --}}>
    <div class="row">
 {{--    <div class="col-2"> <img src="https://i.imgur.com/xELPaag.jpg" width="70" class="rounded-circle mt-2"> </div> --}}
    <div class="col-10">
    <div class="comment-box ml-2">
    <h4>Add a comment</h4>
    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
    <div class="comment-area"> <textarea class="form-control" placeholder="what is your view?" rows="4"></textarea> </div>
    <div class="comment-btns mt-2">
    <div class="row">
    <div class="col-6">
    <div class="pull-left"> <button class="btn btn-success btn-sm">الغاء</button> </div>
    </div>
    <div class="col-6">
    <div class="pull-right"> <button class="btn btn-success send btn-sm">ارسال <i class="fa fa-long-arrow-right ml-1"></i></button> </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
</div>
    {{-- end review --}}


    <!-- Related Projects Row -->
    <h3 class="my-4">منتجات ذات صله </h3>

    <div class="row">
        @foreach ($related as $item)
        {{-- <h5>{{ $item->name }}</h5>
        <p>{{ $item->description }}</p> --}}


      <div class="col-md-3 col-sm-6 mb-4 " >
        <a href="{{route("products.show",[$item->id])}}">
              <img class="img-fluid" src="{{\Storage::url($item->photo)}}" alt="" style="width:250px ; height:150px ;">
            </a>
      </div>
      @endforeach

    </div>

</div>


  </div>


@endsection
@section('scripts')
<script type="text/javascript">
  var count = 0;

  // Simple way
  document.getElementById('increment').onclick = function (e) {
      count++;
      if (e.preventDefault) {
          e.preventDefault();
      }
      e.returnValue = false;
  };
  @endsection



