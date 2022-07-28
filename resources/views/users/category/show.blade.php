@extends('master')
@section("content")

<div class="row container">
<div class="col-4 mt-5 container  card ">
  <div class="me-3">
  <h2  style="color: #FF6F61" class="mt-3 "> الفئه</h2>
  @foreach(\App\Models\Category::all() as $data)
 
   <div class="form-check">

    <label for="{{$data->id}}">
      <i class="fa-solid fa-greater-than" style="color: #FF6F61"></i><a class="text-decoration-none text-black " href="{{route("categorys.show",[$data->id])}}" > {{$data->name}}</a>
 </label>
 </div>
  @endforeach
</div>
<hr>
<div class="me-3 ">
  <h2 style="color: #FF6F61" class="mt-3">السعر</h2>
 
  <i class="fa-solid fa-greater-than " style="color: #FF6F61"></i><a class=" text-decoration-none text-black" href="{{route("filter1",[$category->id])}}" >اقل من 50 </a><br>
  <i class="fa-solid fa-greater-than " style="color: #FF6F61"></i> <a class="text-decoration-none text-black" href="{{route("filter2",[$category->id])}}" >من 50 الي 100 EGY</a><br>
  <i class="fa-solid fa-greater-than "  style="color: #FF6F61"></i><a class="text-decoration-none text-black" href="{{route("filter3",[$category->id])}}" >اكثر من 100 EGY</a> 
</div>
  
  </div>
 
  <section class="col-7">
    <h2 class="text-center" style="color: #FF6F61">{{$category->name}}</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
      @foreach($category->products as $data )
      <div class="col-md-4">

      <div class="card"  >
        
           <a href="{{route("products.show",[$data->id])}}"><img src="{{Storage::url($data->photo)}}" class="card-img-top "  alt="..." style="height: 20rem;"></a>

           <div class="card-body">
                <h2 class="card-title" style="color:#232865">{{$data->name}}</h2>
                <p class="card-text">{{$data->description}}</p>
                <p class="card-text">{{$data->price}} EGP </p>
            </div>
      </div>
    </div>
@endforeach
       
        </div>
  </section>
</div>
{{--    
    
    --}}

@endsection 
