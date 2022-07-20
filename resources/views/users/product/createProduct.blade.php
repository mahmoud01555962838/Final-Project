<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>انشاء منتج جديد</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data" >
    @csrf
    <div class="container">
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
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price" value="{{old("price")}}">
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
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
