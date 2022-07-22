@extends('master')
@section("content")
    <div class="container mt-3"><h1 class="text-center" style="color:#FFA822">{{$category->name}}</h1></div>
    {{-- <div class="card-group" > --}}
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
      @foreach($category->products as $data )
      <div class="col">

      <div class="card"  >
        
           <a href="{{route("products.show",[$data->id])}}"><img src="{{Storage::url($data->photo)}}" class="card-img-top "  alt="..." style="height: 20rem;"></a>

           <div class="card-body">
                <h2 class="card-title" style="color:#FFA822">{{$data->name}}</h2>
                <p class="card-text">{{$data->description}}</p>
                <p class="card-text">{{$data->price}} EGP </p>
            </div>
      </div>
    </div>
@endforeach
       
        </div>

@endsection
