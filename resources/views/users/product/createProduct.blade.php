
@extends('master')
@section("content")
@can('isAdmin')
<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" >
  <div class="card container ">
    
  
    @csrf
    <div class=" m-5">
      <h2 class=" fw-bold text-center" style="color:#FFA822">اضافه منتج</h2>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">اسم المنتج</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old("name")}}">
    <label class="text-danger">{{$errors->first("name")}}</label>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">الوصف</label>
      <textarea class="form-control" placeholder="اكتب وصف المنتج" id="floatingTextarea" name="description" value="{{old("description")}}">{{old("description")}}</textarea>
      <label class="text-danger">{{$errors->first("description")}}</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">السعر</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{old("price")}}">
        <label class="text-danger">{{$errors->first("price")}}</label>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">الصوره</label>
        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="photo" value="{{old("photo")}}">
        <label class="text-danger">{{$errors->first("photo")}}</label>
    </div>
    <div class="mb-3">
    <select class="form-select" name="category_id">
        @foreach ( $data as $item )
        <option   value="{{$item->id}}">{{$item->name}}</option>
        @endforeach

      </select>
      <a href="{{ route('categorys.create') }}">اضفه فئه جديده</a>
    </div>
    <div class="col-lg-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">اضف</button>
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