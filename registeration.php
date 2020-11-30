<?php
session_start();



include("connection.php");
error_reporting(0);

$name = $_POST['user'];
$password = $_POST['password'];
$add = $_POST['address'];
$gen = $_POST['gender'];
$q = " SELECT customer_name, pass FROM customer WHERE customer_name = '$name' && pass = '$password' ";

$data = mysqli_query($conn,$q);
$num = mysqli_num_rows($data);
echo $num;
if($num == 1)
{
    echo '<script language="javascript">';
    echo 'alert("duplicate data")';
    echo '</script>';
    echo 'wrg Entry';
    echo '<br><a href="login.php">go back to login page</a>';
}
else{
    $qy = "insert into customer(customer_name, address, gender, pass) values('$name', '$add', '$gen', '$password')";
    mysqli_query($conn, $qy);
    header('location:login.php');
}



?>