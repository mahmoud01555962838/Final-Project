@extends('master')
@section("content")
    <div class="container">
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
</div>
@endsection