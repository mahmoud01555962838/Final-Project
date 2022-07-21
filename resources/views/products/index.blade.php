@extends('master')
@section("content")
<div class="card">
    <div class="card-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
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
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
          </div>
    </div>
</div>
@endsection
