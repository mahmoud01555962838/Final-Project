@extends('master')
@section("content")
<form method="POST" action="{{route("categorys.update",[$data->id])}}" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
    <div class="container">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">اسم المنتج</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{$data->name}}">
      <label class="text-danger"> {{$errors->first("name")}} </label>
    </div>
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">تعديل </button>
    </div>
  </form>
@endsection