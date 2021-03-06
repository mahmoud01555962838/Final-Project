@extends('master')
@section("content")
@can('isAdmin')
<form method="POST" action="{{route("products.update",[$data->id])}}" enctype="multipart/form-data" >
<div class="card container ">
    @method('PUT')
    @csrf
    <div class="m-5">
      <h2 class=" fw-bold text-center" style="color:#FFA822">تعديل منتج</h2>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">اسم المنتج</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$data->name}}">
      <label class="text-danger"> {{$errors->first("name")}} </label>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">الوصف</label>
      <textarea class="form-control" id="floatingTextarea" name="description" value="{{$data->description}}">{{$data->description}}</textarea>
      <label class="text-danger"> {{$errors->first("description")}} </label>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">السعر</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{$data->price}}">
        <label class="text-danger"> {{$errors->first("price")}} </label>
    </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">الصوره</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo">
        <label class="text-danger"> {{$errors->first("photo")}} </label>
    </div>
    <div class="form-group">
        <img src="{{Storage::url($data->photo)}}" height="200" width="200"/>
    </div>
    <div class="mb-3">
    <select class="form-select" name="category_id">
        @foreach ( $data1 as $item )
        <option   value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

      </select>
    </div>
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">تعديل</button>
    </div>
    </div>
  </form>
  @else
  
  {{--  @extends('notfound') --}}
 
   <div class="container text-center">
     <img src="{{ asset('images/oops.jpg') }}"><br><br>
 <h2 class="text-secondary">the page is not found</h2>
 <p class="fs-4">ان كنت تريد شئ اخر تستطيع <a class="fs-4 text-decoration-none" href="{{route('aboutus')}}">تواصل معنا</a></p>
 </div>
  @endcan
@endsection