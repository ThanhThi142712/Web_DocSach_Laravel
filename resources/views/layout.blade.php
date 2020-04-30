<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!--load all styles -->
  <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader.scss') }}">


</head>
<body>
 <!-- header-->
  <header>
   <nav class="navbar navbar-expand-md bg-secondary navbar-dark">

      
    <div class="col-md-2" >
       
            <div class="left-top-menu float-left">
                <a href="/" class="float-left header-logo">
                     <img src="/Web_DocSach/public/image/logo-waka.png" >
                </a>
           </div>
           
       </div>
   
    <div class="col-md-4">
      <input name="q" type="text" class="form-control ac_input" id="keyword" placeholder="Nhập tên sách, tuyển tập, tác giả,..." autocomplete="off">
      
    </div>
    <div class="col-md-2"> 
      <button  type="button" class="btn btn-success">Tìm kiếm</button>
    </div>
    <div class="col-md-2" >
            
    </div>
    <div  class="col-md-2">
        <button  type="button" class="btn btn-outline-warning">Đăng Nhập</button>
      </div>
    
  </div>
    
 
</nav>

  </header>
  
 
 <!--end header-->
<main>
  <section>
    <div class="container">

            <div class="row header-top">
                <div class="col-md-12 ">
                    <img src="/fontend/hinhanh/banner1.png" class="header__top-image" alt="banner">
                </div>
            </div>

        </div>
    </div>
  </section>
  <section class="clearfix copyright bg-topbar border-top my-3" style="margin-bottom: 0 !important">
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav>
<div class="my-3"></div>
  </section>
  <section class="container_top">
    <div class="row">
    <div class="col-md-2">
    <div class="list-group">
 
   <a href = "#" class = "list-group-item active">
     Danh Sách
   </a>
 
   <a href = "#" class = "list-group-item">Bootstrap Buttons</a>
   <a href = "#" class = "list-group-item">Bootstrap NavBar</a>
   <a href = "#" class = "list-group-item">Bootstrap Tables</a>
</div>
</div>
<div class="col-md-9" style="background: #cdd;">
  <div class="my-4"></div>
  <div class="row">
               
          
  </div>

</div>
</div>
  </section>
 



</main>
<!-- Footer -->
<footer class="page-footer font-small indigo" style="background-color: #C0C0C0;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left" >

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Very long link 1</a>
          </li>
          <li>
            <a href="#!">Very long link 2</a>
          </li>
          <li>
            <a href="#!">Very long link 3</a>
          </li>
          <li>
            <a href="#!">Very long link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
          <li>
            <a href="#!">Link 4</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background-color: #6c757d">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  


</body>
</html>