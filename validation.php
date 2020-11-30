<?php
session_start();
$name1 = $_POST['user'];
$_SESSION['cust']= $name1;


include("connection.php");
error_reporting(0);

$name = $_POST['user'];
$password = $_POST['password'];


$q = " SELECT customer_name, pass FROM customer WHERE customer_name = '$name' && pass = '$password' ";
$data = mysqli_query($conn,$q);
$num = mysqli_num_rows($data);

if($num == 1)
{
    header('location:index.php');
}
else
{
    header('location:login.php');
    echo"alert('wrong login')";
}
 


?>