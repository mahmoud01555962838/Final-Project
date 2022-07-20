<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>عرض المنتجات</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container"><h1 class="text-center">{{$category->name}}</h1></div>
    <div class="card-group" >
      @foreach($category->products as $data )

      <div class="card"  >
        
       <a href="{{route("products.show",[$data->id])}}"><img src="{{Storage::url($data->photo)}}" class="card-img-top "  alt="..." ></a>
    
    <div class="card-body">
          <h5 class="card-title">{{$data->name}}</h5>
          <p class="card-text">{{$data->description}}</p>
          <p class="card-text text-muted">{{$data->price}} EGP </p>
        </div>
      </div>
@endforeach
<div>
  
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>
