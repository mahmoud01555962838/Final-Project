<!doctype html>
<html dir="rtl" lang="ar">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>مقترحاتك</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
 
    <div class="container" style="background: #FFF9F9">
        <h1 class="fw-bold text-center mb-3" style="color:#FFA822"> هديتك </h1>
        <div class="text-center mb-3">يسر موقع هديتك ان تقدم له مقترحات للوصول الي الافضل</div>
         <h3 class="fw-bold text-center mb-2" style="color:#FFA822">ارسال المقترح</h3>

         <form method="post" action="/store/suggest">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
