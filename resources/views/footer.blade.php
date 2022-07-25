{{-- 
<div class=" mt-5 "  dir="rtl">
    <footer
            class="text-center text-black"
            style="background-color:#c2e6e8"
            >
      <div class="container p-4 pb-0 text-end text-black">
    
        <section class="">
          <div class="row">
            <hr class="w-100 clearfix d-md-none" />
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3 fs-4 ">
              <p>
                <a class="text-black bold" style="text-decoration: none; " href="/">الصفحه الرئيسيه</a>
              </p>
              <p>
                <a class="text-black bold" style="text-decoration: none; " href="/aboutus">عنا</a>
              </p>
              <p>
                <a class="text-black bold" style="text-decoration: none; ">اقتراحات أفكار جديدة</a>
              </p>
            </div>
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3 fs-3">
              <h4 class=" mb-4 font-weight-bold ">التواصل</h4>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 89</p>
              <p><i class="fas fa-envelope mr-3"></i>team@team.com</p>
            </div>
            
  
            
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3 " dir="rtl" lang="ar">
              <h4 class="mb-4 font-weight-bold">تابعنا</h4>
  
            
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #3b5998"
                 href="#!"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #55acee"
                 href="#!"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color:green"
                 href="#!"
                 role="button"
                 ><i class="fab fa-whatsapp"></i
                ></a>
  
              
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #ac2bac"
                 href="#!"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>     
            </div>
          </div>
        </section>
      </div>
      <div
           class="text-center p-.5 fs-5"
           style=" color:black"
           >
        © 2022 جميع الحقوق محفوظة "هديتك"
      </div>
    </footer>
  </div> --}}


  <div class="mt-2">
    <!-- Footer -->
    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #929fba"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h3 class="text-uppercase mb-4 font-weight-bold">
                هديتك
              </h3>
              <p class="fs-4">
                موقع هديتك يوفر لك الوقت و المجهود ف اختيار هديتك
                هديتك عندنا لجميع المناسبات
                و لجميع الاعمار
              </p>
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
              <h3 class="text-uppercase mb-4 font-weight-bold">الفئه</h3>
              @foreach(\App\Models\Category::all() as $data)
              <p class="fs-5">
                <a href="categorys/{{$data->id}}" class="text-white text-decoration-none">{{$data->name}}</a>
              </p>
@endforeach
            </div>
            <!-- Grid column -->
  
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />
  
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
              <h3 class="text-uppercase mb-4 font-weight-bold">التواصل</h3>
              <p><i class="fas fa-home mr-3"></i> المنيا, المنيا 10012, مصر</p>
              <p><i class="fas fa-envelope mr-3"></i> hdyytk@gmail.com</p>
              <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
  
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
              <h3 class="text-uppercase mb-4 font-weight-bold">تابعنا</h3>
  
              <!-- Facebook -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #3b5998"
                 href="#!"
                 role="button"
                 ><i class="fab fa-facebook-f"></i
                ></a>
  
              <!-- Twitter -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #55acee"
                 href="#!"
                 role="button"
                 ><i class="fab fa-twitter"></i
                ></a>
  
              <!-- Google -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #dd4b39"
                 href="#!"
                 role="button"
                 ><i class="fab fa-google"></i
                ></a>
  
              <!-- Instagram -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #ac2bac"
                 href="#!"
                 role="button"
                 ><i class="fab fa-instagram"></i
                ></a>
  
              <!-- Linkedin -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #0082ca"
                 href="#!"
                 role="button"
                 ><i class="fab fa-linkedin-in"></i
                ></a>
              <!-- Github -->
              <a
                 class="btn btn-primary btn-floating m-1"
                 style="background-color: #333333"
                 href="#!"
                 role="button"
                 ><i class="fab fa-github"></i
                ></a>
            </div>
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3 fs-4"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
           © 2022 جميع الحقوق محفوظة هديتك
        
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->