<?php 

include("connection.php");
$cat_nm1= $_GET['cat1'];
$cat_sub_nm1= $_GET['cat2'];
//echo"delete from sub_cat_det  where sub_cat_nm = '".$cat_sub_nm1."' and cat_name='".$cat_nm1."'";
$result = mysqli_query($conn,"delete from sub_category_info  where sub_category_name = '".$cat_sub_nm1."' and category_name='".$cat_nm1."'");

header('location:adminpage.php?id=04');
?>