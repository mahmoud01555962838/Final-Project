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
            <div class="col-md-5 w-30">
                <img class="w-100 rounded-4" src="{{Storage::url($data->photo)}}" alt="ramez">
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
                                    <div class="text-center p-4"> <img id="main-image" src="{{\Storage::url($data->photo)}}" width="250" /> </div>

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

    <!-- Related Projects Row -->
    <h3 class="my-4">منتجات ذات صله </h3>

    <div class="row">
        @foreach ($related as $item)
        {{-- <h5>{{ $item->name }}</h5>
        <p>{{ $item->description }}</p> --}}


      <div class="col-md-3 col-sm-6 mb-4">
        <a href="{{route("products.show",[$item->id])}}">
              <img class="img-fluid" src="{{\Storage::url($item->photo)}}" alt="">
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

