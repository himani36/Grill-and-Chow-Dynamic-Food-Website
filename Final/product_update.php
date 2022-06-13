<?php
include("connection.php");
$cat=$_POST['cat_nm'];
$sub=$_POST['sub_nm'];
$pro=$_POST['pnm'];
$pro_pri=$_POST['price'];
$pro_disc=$_POST['dis'];
$pro_desc=$_POST['desc'];
$tfile=$_FILES["image"]["tmp_name"];

$data= "update product_info  set category_name='$cat', sub_category_name='$sub',product_image='Pictures/$cat/$pro.jpg', product_price=$pro_pri, product_disc=$pro_disc, product_descr='$pro_desc' where product_name='$pro'";

move_uploaded_file($tfile, "Pictures/$cat/$pro.jpg");
$result = mysqli_query($conn,$data);
//echo $data;
header('location:viewprofile.php');
?>