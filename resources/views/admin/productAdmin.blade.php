@extends('layouts.app')
@section('content')
@can('isAdmin')
<body style="background-color:white">

<div class="container">
  
    <div class="row ">
        <div class="col-sm-2 col-4  card " style="height:100vh">
        <a href="{{route("home")}}" class="text-decoration-none mb-3 mt-3">
              <h3>لوحه التحكم</h3>
              </a>
              
            <a href="{{route("categoryAdmin")}}" class="text-decoration-none mb-3 ">
              <h3>الفئه</h3>
              </a>
              <a href="{{route("productAdmin")}}" class="text-decoration-none mb-3">
              <h3>المنتج</h3>
              </a>
              <a href="#" class="text-decoration-none mb-3">
              <h3>الطلبات</h3>
              </a>
              <a href="{{route("userAdmin")}}" class="text-decoration-none mb-3">
              <h3>المستخدمين</h3>
              </a>
              <ul class="nav flex-column">
  
              </div>




        <div class="col-8">
     <h2 class="text-center fw-bold">المنتج</h2>
     <div class="container">
     <a href="{{route("products.create")}}" class="btn btn-info mb-3">اضافه منتج</a>
     <table class="table table-bordered border-primary table-hover">
        <thead>
          <tr class="text-warning bg-dark text-center">
            <th scope="col">id</th>
            <th scope="col">Photo</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">category</th>
            <th scope="col">View</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\Product::all() as $data )
            <tr class="text-center">
                <th>{{$data->id}}</th>
                <th><img src="{{\Storage::url($data->photo)}}" alt="" style="height: 100px; width:100px ;"> </th>
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->category->name}}</td>
                <td><a href="{{route("products.show",[$data->id])}}" class="btn btn-success">Show</a></td>
                <td><a href="{{route("products.edit",[$data->id])}}" class="btn btn-primary">Edit</a></td>
                 <td>
                     <form action="{{route("products.destroy",[$data->id])}}" method="post">
                        @method('DELETE')
                        @csrf
                       <button type="submit" class="btn btn-danger"  >Delete</button>
                     </form>

                </td>
              </tr>
            @endforeach


        </tbody>
      </table>
     </div>
       
         </div>
    </div>
    
    
</div>
</body>
@else
  
 {{--  @extends('notfound') --}}

  <div class="container text-center">
    <img src="{{ asset('images/oops.jpg') }}"><br><br>
<h2 class="text-secondary">the page is not found</h2>
<p class="fs-4">ان كنت تريد شئ اخر تستطيع <a class="fs-4 text-decoration-none" href="{{route('aboutus')}}">تواصل معنا</a></p>
</div> 
 
  
  @endcan
@endsection