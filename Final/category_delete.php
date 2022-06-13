<?php 

include("connection.php");
$cat_nm= $_GET['id'];
//echo "delete from cat_info  where cat_name = '$cat_nm'";
$result = mysqli_query($conn,"delete from category_info  where category_name = '$cat_nm'");

header('location:adminpage.php?id=03');
?>