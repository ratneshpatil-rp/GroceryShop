<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("Productdb", "Producttb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'menu.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}


?>




<html>
<head>
      <title>menu
      </title>
       <link rel="stylesheet" 
         type="text/css" 
         href="bootstrap.css"
        />

       <link rel="stylesheet" 
         type="text/css" 
         href="style.css"
        />
      
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
        <script src="java1.js" type="text/javascript">
        </script>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="menu.php"><img src="logo.png" height="30" width="41"></a>
          <div class="collapse navbar-collapse" id="Navbar">
              <ul class="navbar-nav mr-auto">
                      <li class="nav-item"><a class="nav-link" href="./index.php"> Home</a></li>
                      <li class="nav-item  active"><a class="nav-link" href="./menu.php"> Menu</a></li>
                      <li class="nav-item"><a class="nav-link" href="aboutus.php"> About-Us</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              </ul>
</div>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>
      </div>
  </nav>

 <br>
 <div class="container">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id'], $row['product_wei']);
                }
            ?>
        </div>
</div>

  <footer class="footer">
    <div class="container">
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
       </div>
       <div class="row justify-content-center">             
            <div class="col-auto">
                <p>© Copyright 2020 FreshMart Grocery Shop</p>
            </div>
       </div>
    </div>
  </footer>  
  <script src="assets/js/scripts.js"></script>

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
