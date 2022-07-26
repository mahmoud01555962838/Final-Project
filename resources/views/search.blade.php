@extends('master')
@section("content")
<div class="carousel" data-flickity>
          @foreach ($products as $item)
          <a href="{{route("products.show",[$item->id])}}"><img class="carousel-cell" src="{{Storage::url($item->photo)}}"/></a>
          @endforeach
</div>
@endsection
