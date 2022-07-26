@extends('master')
@section("content")
@can('isAdmin')
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
  @else
  
  {{--  @extends('notfound') --}}
 
   <div class="container text-center">
     <img src="{{ asset('images/oops.jpg') }}"><br><br>
 <h2 class="text-secondary">the page is not found</h2>
 <p class="fs-4">ان كنت تريد شئ اخر تستطيع <a class="fs-4 text-decoration-none" href="{{route('aboutus')}}">تواصل معنا</a></p>
 </div> 
  
   
   @endcan
@endsection