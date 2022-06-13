<?php 

include("connection.php");
$cat_nm= $_GET['id'];
//echo "delete from cat_info  where cat_name = '$cat_nm'";
$result = mysqli_query($conn,"delete from cart  where product_name = '$cat_nm'");

header('location:viewcart.php');
?>