<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
          .bck1{
              background: lightyellow;
          }
          .bck2{
              background: lightgreen;
          }
          .ratnesh{
              background: rebeccapurple;
              color: white;
              height: 70px;
          }
        </style>
      
        <script src="java1.js" type="text/javascript">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body>

<div class="container ratnesh">
    <div class="row">
    <div class="col-md-1 my-2">
          <img src="logo.png" height="50" width="50">
        </div>
        <div class="col-md-8 my-2">
          <h2>FreshMart Grocery Shop</h2>
    </div>
        </div>
</div>

<br>
<div class="container">
          <div class="row">
            <div class="col-lg-6 bck1">
                <h2>Login Form</h2>
                <form action="validation.php" method="post">
                    <div class="form-group">
                    <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            <div class="col-lg-6 bck2">
                <h2>Sign-In Form</h2>
                <form action="registeration.php" method="post">
                    <div class="form-group">
                    <label>Username</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Gender</label>
                        <input type="text" name="gender" class="form-control">
                    </div>
            
                    <button type="submit" class="btn btn-primary"> Sign-In </button>
                </form>
                <br>
            </div>
          </div>
</div>
    
</body>
</html>