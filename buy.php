<?php
include('connection.php');
session_start();
header('location:index.php');
echo 'alert("order placed")';
$quall = count($_SESSION['cart']);
$pricet = $_SESSION['pri'];

$name = $_SESSION['cust'];



$query = "SELECT customer_id FROM customer WHERE customer_name ='$name'";
$data = mysqli_query($conn, $query);

$result1 = mysqli_fetch_assoc($data);
$custtt = $result1['customer_id'];


$qy = "insert into cart(cart_id, quantity, totalprice, customer_id) values('$custtt','$quall', '$pricet', '$custtt')";
    mysqli_query($conn, $qy);


foreach($_SESSION['cartprod'] as $key=>$value){
    
    $qy2 = "INSERT into cp(cart_id, id) values('$custtt','$value');";
    mysqli_query($conn, $qy2);
    
    
}

?>