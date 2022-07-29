@extends('master')
@section("content")
@can('isAdmin')
<form method="POST" action="{{route("users.update",[$user->id])}}"  >
<div class="card container ">
    @method('PUT')
    @csrf
    <div class="m-5">
      <h2 class=" fw-bold text-center" style="color:#FFA822">تعديل مستخدم</h2>
   
      <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">نوع المستخدم </label>
      <select class="form-select" name="type">
        <option value="user">user</option>
        <option value="admin">admin</option>
      </select >
      <!-- <input type="text" class="form-control"  name="type" value="{{$user->type}}"> -->
      <label class="text-danger"> {{$errors->first("type")}} </label>
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