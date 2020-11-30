<?php
session_start();

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
            td{
                width: 100px;
                padding: 5px;
                height: 60px;
            }
        </style>
        
      
        <script src="java1.js" type="text/javascript">
        </script>
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
                      <li class="nav-item"><a class="nav-link" href="./index.php"> Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="menu.php"> Menu</a></li>
                      <li class="nav-item active"><a class="nav-link" href="aboutus.php"> About-Us</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              </ul>
              <span class="navbar-text">
                  <a data-toggle="modal" data-target="#loginModal">
                    <span class="fa fa-sign-in"></span>Login
                  </a>
              </span>
          </div>
      </div>
  </nav>
  <header class="hstyle jumbotron">
    <div class="container">
  
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
        </div>
    </div>
  </header>
  <br>
  <br>
  <center><h3>OUR BUSINESS</h3></center>
<center>
  <?php
    include("connection.php");
    error_reporting(0);
    $query = "select * from store";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total!=0)
    {
        ?>     
        <table>
            <tr>
                <th>store_id</th>
                <th>location</th>
                <th>images</th>
            </tr>
        <?php
        while($result = mysqli_fetch_assoc($data))
        {
            echo"<tr>
                <td>".$result['store_id']."</td>
                <td>".$result['location']."</td>
                <td><img src=".$result['store_image']."/></td>
            </tr>";
        }
    }
    else
    {
        echo "No record found";
    }
?>
</table>

<hr></hr>
<br>
<center><h3>Employee Details</h3></center>

<?php
    include("connection.php");
    error_reporting(0);
    $query1 = "select emp_name, post, store_id from employee";
    $data1 = mysqli_query($conn,$query1);
    $total1 = mysqli_num_rows($data1);

    


    if($total1!=0)
    {
        ?>
        
        <table>
            <tr>
                <th>NAME</th>
                <th>POST</th>
                <th>store</th>
            </tr>
     



        <?php
        while($result1 = mysqli_fetch_assoc($data1))
        {
            echo"<tr>
                <td>".$result1['emp_name']."</td>
                <td>".$result1['post']."</td>
                <td>".$result1['store_id']."</td>
            </tr>";
        }

    }
    else
    {
        echo "No record found";
    }
?>
</table>


  <center>

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
