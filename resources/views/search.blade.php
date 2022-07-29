@extends('master')
@section("content")
<!-- <div class="carousel" data-flickity>
          @foreach ($products as $item)
          <a href="{{route("products.show",[$item->id])}}"><img class="carousel-cell" src="{{Storage::url($item->photo)}}"/></a>
          @endforeach
</div> -->
<section class="container" >
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3 container">
          @foreach ($products as $item)
          <div class="col-md-4 ">

<div class="card">
  
     <a href="{{route("products.show",[$item->id])}}"><img src="{{Storage::url($item->photo)}}" class="card-img-top "  alt="..." style="height: 20rem;"></a>

     <div class="card-body">
          <h2 class="card-title" style="color:#232865">{{$item->name}}</h2>
          <p class="card-text">{{$item->description}}</p>
          <p class="card-text">{{$item->price}} EGP </p>
      </div>
</div>
</div>
          @endforeach
          </div>
  </section>
</div>
@endsection
