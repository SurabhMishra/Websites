<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <!-- used bootstrap -->

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <!-- font famaily -->
 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&family=Source+Code+Pro&family=Source+Sans+Pro:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- navbar -->


<?php  include 'menu.php';  ?>

<!-- carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="I/ft.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="I/b.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="I/c.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- for about -->

<section class="my-5">
    <div class = "py-5">
        <h2 class = "text-center">About Us</h2>
    </div>

<!-- used grid system -->
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 col-12">
        <img src="I/f.jpg" class="img-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
        <h2 class = "display-4">UNIQUE ZYM</h2>
        <p class ="py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. At cumque cupiditate reiciendis deleniti provident similique eius sequi corrupti rem, soluta accusantium dolorum voluptatibus, omnis, iste culpa necessitatibus porro fugiat obcaecati.</p>
        <a href="about.php" class="btn btn-success">More Information</a>
    </div>
</div>
</div>
</section>

<!-- for services -->

<section class="my-5">
    <div class = "py-5">
        <h2 class = "text-center">Our Services</h2>
    </div>

    <div class="container-fluid">
    <div class="row" >
    <div class ="col-lg-4 col-md-4 col-12">
        <!-- cards -->
    <div class="card" >
  <img class="card-img-top" src="I/e8.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Hard Work</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>

    <div class ="col-lg-4 col-md-4 col-12">
        <!-- cards -->
    <div class="card" >
  <img class="card-img-top" src="I/e7.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Hard Work</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>

    <div class ="col-lg-4 col-md-4 col-12">
        <!-- cards -->
    <div class="card" >
  <img class="card-img-top" src="I/a4.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Hard Work</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
    </div>
    </div>
    </div>
</section>

<section class="my-5">
    <div class = "py-5">
        <h2 class = "text-center">Our Gallery</h2>
    </div>

    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e1.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e2.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e3.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e4.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
           <img src="I/e6.jpg" class="img-fluid pb-4">
          
           
          </div>
        </div>
    </div>
</section>
<!-- form -->
<section class="my-5">
    <div class = "py-5">
        <h2 class = "text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
         <div class="form-group">
         <label for="">User Name</label>
         <input type="text" name="user" autocomplete="off" class="form-control">
         </div>

         <div class="form-group">
         <label for="">Email Id</label>
         <input type="text" name="email" autocomplete="off" class="form-control">
         </div>

         <div class="form-group">
         <label for="">Mobile</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control">
         </div>
        
         <div class="form-group">
         <label for="">Comments</label>
         <textarea class="form-control" name="comments"></textarea>
         </div>
         <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

<!-- footer -->

<footer>
    <p class="p-3 bg-dark text-white text-center">@uniquegymcenter</p>
</footer>

<!-- used bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>