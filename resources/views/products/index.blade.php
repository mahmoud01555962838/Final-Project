{{-- @extends('master')
@section("content")
<div class="card">
    <div class="card-body" > --}}

        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($products as $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{$loop->index === 0 ? 'active' : ''}}" aria-current="{{$loop->index === 0 ? 'true' : 'false'}}" aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner" style="max-height: 600px;">
                @foreach ($products as $item)
                    <div class="carousel-item {{$loop->index === 0 ?'active':''}}">
                        <img src="{{$item['photo']}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>{{$item['name']}}</h5>
                        <p>{{$item['description']}}</p>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button> --}}
          {{-- </div> --}}

         {{--  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1607469256872-48074e807b0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2lmdHN8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100 h-10 " alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://cdn.pixabay.com/photo/2014/11/27/22/44/gift-548290__340.jpg" class="d-block w-100 h-10" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-gift-cards-2021-1637270343.jpg" class="d-block w-100 h-10" alt="...">
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
    </div>
 
        </div> --}}
        
     {{--    <div class="text-center">
            <img src="{{Storage::url($dataphoto->photo)}}" class="rounded" alt="...">
          </div> --}}

  {{--       <div class="card mt-5" >
          <div class="card-body" > --}}
         {{-- 
          @foreach(\App\Models\Category::all() as $data)
          <div class="container row">
          <h2 class="fs-3 m-5">{{$data->name}}</h2>

          <div class="carousel" data-flickity>
            @foreach($data->products as $dataphoto)
          
                <a href="{{route("products.show",[$dataphoto->id])}}">
                  <img class="rounded-4 m-5" src="{{Storage::url($dataphoto->photo)}}" alt="ramez" style="height: 200px">
                </a>
            
              @endforeach
            </div>                                                    
         
        </div>
        @endforeach
        </div>
      </div>
    </div>
</div>
@endsection
 --}}

@extends('master')
@section("content")
<div class=" container mt-5">
    {{-- <div class="card-body" > --}}
        {{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($products as $item)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{$loop->index === 0 ? 'active' : ''}}" aria-current="{{$loop->index === 0 ? 'true' : 'false'}}" aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner" style="max-height: 600px;">
                @foreach ($products as $item)
                    <div class="carousel-item {{$loop->index === 0 ?'active':''}}">
                        <img src="{{$item['photo']}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>{{$item['name']}}</h5>
                        <p>{{$item['description']}}</p>
                        </div>
                    </div>
                @endforeach
            </div> --}}

            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button> --}}
          {{-- </div> --}}
          <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1607469256872-48074e807b0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2lmdHN8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1607469256872-48074e807b0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2lmdHN8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1607469256872-48074e807b0a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Z2lmdHN8ZW58MHx8MHx8&w=1000&q=80" class="d-block w-100" alt="...">
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
          {{-- </div> --}}
    </div>
 
        </div>
        
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
        </div>
      </div>
    </div>
</div>
@endsection