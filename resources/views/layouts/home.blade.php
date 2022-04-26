<!DOCTYPE html>
<html lang="en">
<head>
    @include('site.includes.style')
</head>

<body>
<!-- loadingscreen -->
<div class="container-fluid">
  <div class="row">
   <div class="col-md-12">
       <div id="loadingscreen">
        <div class="sk-cube-grid">
          <div class="sk-cube sk-cube1"></div>
           <div class="sk-cube sk-cube2"></div>
          <div class="sk-cube sk-cube3"></div>
           <div class="sk-cube sk-cube4"></div>
           <div class="sk-cube sk-cube5"></div>
           <div class="sk-cube sk-cube6"></div>
          <div class="sk-cube sk-cube7"></div>
           <div class="sk-cube sk-cube8"></div>
           <div class="sk-cube sk-cube9"></div>
        </div>
       </div>
     </div>
   </div>
</div>
  <!-- ///////////////navbar///////////// -->

  <nav class="navbar navbar-expand-lg navbar-light  ">
      @include('site.includes.header')
  </nav>
  <!-- //////////////////////////////// health and diagnos////// -->
  <div class="health  py-5  gym ">
    @yield('content')
  </div>
  <!-- //////////////////////////////////////// -->
  <!-- ///////////////////footer////////////// -->
  <div class="footer pb-5">
      @include('site.includes.footer')
  </div>

<!-- /////////////////////scrollbutton/////////////// -->
 <!-- <button class="btn btn-dark btnbtn" id="btnbtn">
   <i class="fas fa-arrow-up"></i>
  </button> -->

<!-- /////////////////////scrollbutton/////////////// -->



@include('site.includes.script')

</body>

</html>
