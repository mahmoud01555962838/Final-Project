<body style="background-color:white">
<div class="container">
@can('isAdmin')
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
              <a href="" class="text-decoration-none mb-3">
              <h3>الطلبات</h3>
              </a>
              <a href="{{route("userAdmin")}}" class="text-decoration-none mb-3">
              <h3>المستخدمين</h3>
              </a>
              <ul class="nav flex-column">
  
              </div>
        <div class="col-8 ">
          <div class="mb-5 text-center">
     <h2 class="text-center fw-bold">لوحه التحكم</h2>
     </div>
     <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 border-success ">
      
      <div class="card-body">
        <h5 class="card-title text-success text-center">الفئه</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-danger">
      
      <div class="card-body">
        <h5 class="card-title text-danger text-center">المنتجات</h5>
        <p class="card-text">This is a short card.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-warning ">
      
      <div class="card-body">
        <h5 class="card-title text-warning text-center">الطلبات</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-info">
      
      <div class="card-body">
        <h5 class="card-title text-info text-center">المستخدمين</h5>
        <p class="card-text">عدد المستخدمين:</p>
      </div>
    </div>
  </div>
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