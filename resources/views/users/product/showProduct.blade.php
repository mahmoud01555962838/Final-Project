<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تفاصيل المنتج</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-7  py-5">
                <label style="color: #FFA822" class="fs-2">اسم المنتج:</label>
                <h3 class="fs-4">{{$data->name}}</h3>
                <label style="color: #FFA822" class="fs-2">الوصف:</label>
                <p class="fs-4">{{$data->description}}</p>
                <label style="color: #FFA822" class="fs-2">السعر:</label>
                <h3 class="fs-4">{{$data->price}}EGP</h3>
                <a href="#" class="btn " style="background:#134E6F; color: #FFA822 ">اضف الي السله</a>

            </div>
            <div class="col-md-5 w-30">
                <img class="w-100 rounded-4" src="{{Storage::url($data->photo)}}" alt="ramez">
            </div>


        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
