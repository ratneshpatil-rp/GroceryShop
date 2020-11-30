<?php
session_start();
error_reporting(0);
include("connection.php");


?>

<html>
<head>
      <title>index
      </title>
       <link rel="stylesheet" 
         type="text/css" 
         href="bootstrap.css"
        />

       <link rel="stylesheet" 
         type="text/css" 
         href="style.css"
        />
        <style>
          html{
            scroll-behavior: smooth;
          }
        </style>
      
        <script src="java1.js" type="text/javascript">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="logo.png" height="30" width="41"></a>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="./index.php"> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="menu.php"> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php"> About-Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php"> Contact</a></li>
            </ul>
            <span class="navbar-text">
                <a data-toggle="modal" data-target="#loginModal">
                  <span class="fa fa-sign-in"></span>Login
                </a>
            </span>
        </div>
    </div>
</nav>

<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="post">
            <div class="form-row">
              <div class="form-group col-sm-4">
                <label class="sr-only" for="exampleInputEmail3">name</label>
                <input class="form-control form-control-sm mr-1" name="user" id="exampleInputEmail3" placeholder="name">
              </div>
              <div class="form-group col-sm-4">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input class="form-control form-control-sm mr-1" name="password" id="exampleInputPassword3" placeholder="password">
              </div>
            </div>
            <div class="form-row">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm ml-1">Login-In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<header class="hstyle jumbotron">
  <div class="container scrollme">

      <div class="row row-header">
          <div class="col-12 col-sm-6">
              <h1>FreshMart Grocery</h1>
              <p>Having the best quality products A place where everything special. Your neighborhood grocers,For the food lovers!</p>
          </div>
          <div class="col-12 col-sm align-self-center">
              <img src="logo.png" class="img-fluid" height="150" width="150">
          </div>
          <div class="col-12 col-sm align-self-center">  
            <button class="btn1">Home delivery</button>
          </div>
          <div class="col-1">
            <a href="#section2">bottom</a>
          </div>
      </div>
  </div>
</header>

<br>
<div class="container">
  <div class="row row-content">
    <div class="col">
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="photo1.jpg">
              
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="photo2.jpg">
              
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="photo3.jpg">
              
            </div>
          </div>
          <ol class="carousel-indicators">
            <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
            <li data-target="#mycarousel" data-slide-to="1"></li>
            <li data-target="#mycarousel" data-slide-to="2"></li>
          </ol>
          <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div>
  </div>
</div>
<br>
<marquee class="mr1">Dear Costumer, there is limited period offers on all food products and dairy products and extra sale on beauty porducts.....! </marquee>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-last col-md-3">
      <h3>Min 50% Discount on each Product</h3>
    </div>
    <div class="col col-sm order-sm-first col-md">
      <div class="media">
        <img class="d-flex mr-3 img-thumbnail align-self-center"
         src="images1.jpg">
         <div class="media-body">
            <h2 class="mt-0">Fruits and Vegetable</h2>
            <p class="d-none d-sm-block">Handpicked Sorted Cleaned Chemicalless Fruits and Vegetable at reasonable price</p>
         </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<hr></hr>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-first col-md-3">
      <h3>Buy 1 get 1 free on most Product</h3>
    </div>
    <div class="col col-sm order-sm-last col-md">
      <div class="media" >
        <img class="d-flex mr-3 img-thumbnail align-self-center order-sm-last"
        src="images3.jpg">
         <div class="media-body order-sm-first">
            <h2 class="mt-0">Sweet,Snacks and Spicy</h2>
            <p class="d-none d-sm-block">Craving for food snacks, our wide range of snacks can just fulfill your wish</p>
          </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<hr></hr>
<br>
<br>
<br>
<br>
<div class="container">
  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-last col-md-3">
      <h3>30% Extra on Cheese Products</h3>
    </div>
    <div class="col col-sm order-sm-first col-md">
      <div class="media">
        <img class="d-flex mr-3 img-thumbnail align-self-center"
         src="images2.jpg">
         <div class="media-body">
            <h2 class="mt-0">Dairy and Milk Products</h2>
            <p class="d-none d-sm-block">Fresh milk and dairy products from farm at low cost and everyday delivery also possible and no added presevative</p>
         </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<hr></hr>
<div class="container">
  <div class="row row-content align-items-center col-12">
    <div>
    </div>
    <div>
    <table class="tb1" border=0.5>
      <tr>
        <td class="tb2 col-8"><h4> Home Delivery</h4></td>
      </tr>
      <tr>
        <td> Number of products  <input id="r1" type="radio"> 1</input>    <input id="r1" type="radio"> 2</input>    <input id="r1" type="radio"> 3</input>    <input id="r1" type="radio"> 4</input>     <input id="r1" type="radio"> 5</input>     <input id="r1" type="radio"> 6</input> </td>
      </tr>
      <tr>
        <td> Date and time <input type="text" placeholder="Date"></input> <input type="text" placeholder="Time"></input></td>
      </tr>
      <tr>
        <td> Area Pincode <input type="text" placeholder="eg 400092"></input></td>
      </tr>
      <tr>
        <td><button class="btn2">Reserve</button></td>
      </tr>
    </table>
    </div>
    <div>
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container scrollme">
      <div class="row">             
          <div class="col-4 offset-1 col-sm-2">
              <h5>Links</h5>
              <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
          </div>
          <div class="col-7 col-sm-5">
              <h5>Our Address</h5>
              <address>
                231,M.G. Road,<br>
                Chikuwadi,<br>
                Borivali West,<br>
                Mumbai-92<br>
                Tel.: +852 1234 5678<br>
                Fax: +852 8765 4321<br>
                Email: <a href="tsec.com">frshmart.co.net</a>
            </address>
          </div>
          <div class="col-12 col-sm-4 align-self-center">
              <div class="text-center">
                  <a href="http://google.com/+">Google+</a>
                  <a href="http://www.facebook.com/profile.php?id=">Facebook</a>
                  <a href="http://www.linkedin.com/in/">LinkedIn</a>
                  <a href="http://twitter.com/">Twitter</a>
                  <a href="http://youtube.com/">YouTube</a>
                  <a href="mailto:">Mail</a>
              </div>
          </div>
            <div class="col-1">
              <a href="#section1">up</a>
            </div>
    

     </div>
     <div class="row justify-content-center">             
          <div class="col-auto">
              <p>© Copyright 2020 FreshMart Grocery Shop</p>
          </div>
     </div>
  </div>
</footer>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
  );
</script>
</html>
