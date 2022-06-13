<?php 

include("connection.php");
$cat_nm=$_POST["t1"];

$result = mysqli_query($conn,"INSERT INTO category_info (category_name) VALUES('$cat_nm')");

mkdir("Pictures/".$cat_nm);
header('location:adminpage.php?id=03');
?>

