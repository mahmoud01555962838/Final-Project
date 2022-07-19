<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="container-fluid" style="background-color:#1ac0c6">
    <a class="navbar-brand" href="#">MY Gift</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><i class="fa-solid fa-basket-shopping-simple"></i></a></li>     
        <li><a href="{{ route('register') }}" style="color:#ffa822;font-size:20px">تسجيل </a></li>
        <li><a href="{{ route('login') }}" style="color:#000000;font-size:15px;margin-left:5px">تسجيل الدخول </a></li>
      </ul>
    </div>
  </div>
</nav>
<form class="d-flex">
        <button class="btn btn-outline-warning" type="submit">ابحث</button>
        <input class="form-control me-2" type="search"  aria-label="Search">
</form>   


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="margin-left:300px" >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav navbar-left" style="float:right">
        <li><a href="{{ route('register') }}" style="margin-right:10px">category 5</a></li>
        <li><a href="{{ route('login') }}" style="margin-right:10px">category 4</a></li>
        <li><a href="{{ route('login') }}" style="margin-right:10px">category 3</a></li>
        <li><a href="{{ route('login') }}" style="margin-right:10px">category 2</a></li>
        <li><a href="{{ route('login') }}" style="margin-right:10px">category 1</a></li>
    </ul>
    </div>
  </div>
</nav>