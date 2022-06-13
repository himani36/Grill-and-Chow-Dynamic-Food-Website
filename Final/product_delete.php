<?php 

include("connection.php");
$product= $_GET['id'];
//echo "delete from product_info  where product_name = '$product'";
$result = mysqli_query($conn,"delete from product_info  where product_name = '$product'");
header('location:adminpage.php?id=06');
?>