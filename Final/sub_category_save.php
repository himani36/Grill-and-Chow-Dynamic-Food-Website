<?php 

include("connection.php");
$cat_nm= $_POST['s1'];
$sub_cat_nm=$_POST["t1"];

$result = mysqli_query($conn,"INSERT INTO sub_category_info (category_name,sub_category_name) VALUES('$cat_nm','$sub_cat_nm')");
header('location:adminpage.php?id=04');
?>