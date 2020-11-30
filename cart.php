<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("Productdb", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

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
        <script>
            function fn1()
            {
                alert("order place");
            }
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
                      <li class="nav-item active"><a class="nav-link" href="./menu.php"> Menu</a></li>
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
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <br>
                <h6>My Cart</h6>
                <hr>

                <?php

                $total = 0;
                    if (isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $cartproduct = array();
                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id'], $row['store_id']);
                                    $total = $total + (int)$row['product_price'];
                                    array_push($cartproduct,$row['id']);
                                }
                            }
                        }
                        $_SESSION['cartprod']=$cartproduct;
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6>Rs<?php echo $total; ?></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6>Rs<?php
                            echo $total;
                            $_SESSION['pri']= $total;
                            ?></h6>
                    </div>
                </div>
            </div>
            <br>
            <center>
            <form action="final.php" onclick="fn1()">
            <button type="submit" class="btn btn-success" >buy now</button>
            </form>
            </center>
            
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>