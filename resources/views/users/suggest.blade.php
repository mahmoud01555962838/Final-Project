@extends('master')
@section("content")

    <div class="container" style="background: #FFF9F9">
        <h1 class="fw-bold text-center mb-3" style="color:#FFA822"> هديتك </h1>
        <div class="text-center mb-3">يسر موقع هديتك ان تقدم له مقترحات للوصول الي الافضل</div>
         <h3 class="fw-bold text-center mb-2" style="color:#FFA822">ارسال المقترح</h3>

         <form method="post" action="{{route('suggests.store')}}" enctype="multipart/form-data" >
             @csrf
          <div class="mb-3">
            <label for="body" class="form-label fs-2" style="color:#FFA822"> مقترحاتك </label>
            <textarea type="text" name="body" class="form-control" id="body" aria-describedby="body"></textarea>

          </div>
            <div class="mb-3">
            <label for="photo" class="form-label"> يمكنك رفع صوره ايضا  <span style="color:#FFA822">هنا</span></label>
            <input type="file" name="photo" class="form-control" id="photo" aria-describedby="photo">

          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
   
@endsection
