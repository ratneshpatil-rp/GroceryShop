<?php
include('connection.php');
session_start();
header('location:index.php');
echo 'alert("order placed")';
$quall = count($_SESSION['cart']);
$pricet = $_SESSION['pri'];
echo $_SESSION['pri'];
echo $quall;
$name = $_SESSION['cust'];
echo $name;
foreach($_SESSION['cartprod'] as $key=>$value){
    echo "value".$value."<br>";
    echo $key;
}
echo $name;
$query = "SELECT customer_id FROM customer WHERE customer_name ='$name'";
$data = mysqli_query($conn, $query);

$result1 = mysqli_fetch_assoc($data);
$custtt = $result1['customer_id'];
echo $custtt;

$qy = "insert into cart(cart_id, quantity, totalprice, customer_id) values('$custtt','$quall', '$pricet', '$custtt')";
    mysqli_query($conn, $qy);


foreach($_SESSION['cartprod'] as $key=>$value){
    
    $qy2 = "INSERT into cp(cart_id, id) values('$custtt','$value');";
    mysqli_query($conn, $qy2);
    
    
}

?>