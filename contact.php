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
        
      
        <script type="text/javascript">
          function validate()
          {
              var firstname= document.getElementById("firstname");
              var secondname= document.getElementById("secname");
              var email= document.getElementById("emailname");
              var mobile= document.getElementById("mobno");
              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if(firstname.value ==""||mobile.value=="" || email.value =="" || secondname.value =="")
                {
                    alert("fill all fields")
                    return false;
                }
                if(!email.value.match(mailformat))
				        {				
                    alert("wrong email address")
                    return false;
                }
                if(mobile.value<100000000 || mobile.value>9999999999)
                {
                  alert("invalid phone number")
                  return false;
                }
                else
                {
                  alert("Thanks for feedback")
                  return true;
                }
          }

        </script>
</head>
<body>
  <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="logo.png" height="30" width="41"></a>
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php"> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./menu.php"> Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="aboutus.php"> About-Us</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
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
          <form>
            <div class="form-row">
              <div class="form-group col-sm-4">
                <label class="sr-only" for="exampleInputEmail3">Email address</label>
                <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
              </div>
              <div class="form-group col-sm-4">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="password">
              </div>
            </div>
            <div class="form-row">
              <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary btn-sm ml-1">Sign In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

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
<div class="container">
  <div class="row">
      <div class="col-12">
         <h3>Contact Us</h3>
         <hr>
      </div>
  </div>

  <div class="row row-content">
    <div class="col-12">
       <h3>Location Information</h3>
    </div>
     <div class="col-12 col-sm-4 offset-sm-1">
            <h5>Our Address</h5>
             <address style="font-size: 100%">
              231,M.G. Road,<br>
              Chikuwadi,<br>
              Borivali West,<br>
              Mumbai-92<br>
              Tel.: +852 1234 5678<br>
              Fax: +852 8765 4321<br>
              Email: <a href="tsec.com">freshmart.co.net</a>
             </address>
     </div>
    </div>
     
     
     <div class="row row-content">
      <div class="col-12">
         <h3>Send us your Feedback</h3>
      </div>
       <div class="col-12 col-md-9">
           <form onSubmit=" return validate();" action="index.html">
               <div class="form-group row">
                  <label for="firstname" class="col-md-2 col-form-label">Name</label>
                   <div class="col-md-4">
                       <input type="text" class="form-control" id="firstname" name="firstname" placeholder="first name">
                   </div>
                   <div class="col-md-4">
                    <input type="text" class="form-control" id="secname" name="secname" placeholder="second name">
                   </div>
               </div>
               <div class="form-group row">
                  <label class="col-form-label">Email ID</label>
                  <div class="col-md-1">

                  </div>
                    <div class="col-md-8 align-self-center">
                      <input type="text"  class="form-control" id="emailname" name="emailname" placeholder="id@gmail.com">
                    </div>
               </div>
               <div class="form-group row">
                 <label class="col-form-label">Phone No.</label>
                 <div class="col-md-1">

                </div>
                 <div class="col-md-8">
                  <input type="text" class="form-control"  id="mobno" placeholder="+91">
                 </div>
        
               </div>
               <div class="form-group row">
                 <label class="col-form-label">Describe</label>
                 <div class="col-md-1">

                </div>
                 <div class="col-md-8">
                   <textarea form="usrform">Enter details</textarea>
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-md-3">

                 </div>
                 <div class="col-md-2">
                  <button type="submit" class="sub">Submit</button>
                 </div>
                 <div class="col-md-2">
                   <input type="reset" class="res">
                 </div>


               </div>
               <br>
           </form>
       </div>
  </div>
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

