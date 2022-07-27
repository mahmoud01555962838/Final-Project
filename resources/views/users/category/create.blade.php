@extends('master')
@section("content")
@can('isAdmin')
<div class="container mt-5" style="background: #FFF9F9">
<div class="card">
    <div class="card-head">
    <h1 class="fw-bold text-center mb-3" style="color:#FFA822"> اضافه فئه</h1>
    </div>  
    <div class="card-body">
    
     <form method="post" action="/categorys">
        @csrf
     <div class="mb-3">
       <label for="name" class="form-label fs-2" style="color:#FFA822"> اسم الفئه </label>
       <input type="text" name="name" class="form-control" id="name" aria-describedby="body">
       <label class="text-danger">{{$errors->first("name")}}</label>
     </div>

     <button type="submit" class="btn btn-primary">اضف</button>
   </form>
    </div>
</div>

</div>
@else
  
{{--  @extends('notfound') --}}

 <div class="container text-center">
   <img src="{{ asset('images/oops.jpg') }}"><br><br>
<h2 class="text-secondary">the page is not found</h2>
<p class="fs-4">ان كنت تريد شئ اخر تستطيع <a class="fs-4 text-decoration-none" href="{{route('aboutus')}}">تواصل معنا</a></p>
</div> 

 
 @endcan
@endsection