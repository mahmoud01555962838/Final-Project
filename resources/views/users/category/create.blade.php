@extends('layout.app')
@section('content')

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
       <textarea type="text" name="name" class="form-control" id="name" aria-describedby="body"></textarea>

     </div>

     <button type="submit" class="btn btn-primary">حفظ</button>
   </form>
    </div>
</div>

</div>
@endsection