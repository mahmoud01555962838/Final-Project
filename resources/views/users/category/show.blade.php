@extends('master')
@section("content")
    <div class="container"><h1 class="text-center">{{$category->name}}</h1></div>
    <div class="card-group" >
      @foreach($category->products as $data )

      <div class="card"  >
        
           <a href="{{route("products.show",[$data->id])}}"><img src="{{Storage::url($data->photo)}}" class="card-img-top "  alt="..." ></a>

           <div class="card-body">
                <h5 class="card-title">{{$data->name}}</h5>
                <p class="card-text">{{$data->description}}</p>
                <p class="card-text text-muted">{{$data->price}} EGP </p>
            </div>
      </div>
@endforeach
        </div>

@endsection