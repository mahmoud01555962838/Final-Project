<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid" style="background-color:#1ac0c6">
    <a class="navbar-brand text-warning ms-5" href="#"><i class="fa-solid fa-gift fa-2xl fa-beat"></i>  هديتك</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><i class="fa-solid fa-cart-shopping fa-2x text-success"></i></a></li>     
        <li><a href="{{ route('register') }}" style="color:#ffa822;font-size:20px">تسجيل  |</a></li>
        <li><a href="{{ route('login') }}" style="color:#000000;font-size:20px;margin-left:5px">تسجيل الدخول </a></li>
      </ul>
    </div>
  </div>
</nav>
  <form class="d-flex justify-content-center gap-2 " dir="rtl">
    <button class="btn btn-warning" type="submit">بحث|</button>
    <input class="form-control me-3 w-50" type="search"  aria-label="Search">
</form> 
  


<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center mt-4">
  <div class=""  >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav text-warning ">
        <li><a class="text-warning" href="{{ route('register') }}" >category</a></li>
        <li><a class="text-warning" href="{{ route('login') }}" >category</a></li>
        <li><a class="text-warning" href="{{ route('login') }}" >category</a></li>
        <li><a class="text-warning" href="{{ route('login') }}" >category</a></li>
        <li><a class="text-warning" href="{{ route('login') }}">category</a></li>
    </ul>
    </div>
  </div>
</nav>