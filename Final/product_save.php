<?php 

include("connection.php");
$cat_nm=$_POST['cat_name'];
$sbcat_nm=$_POST['sub_cat_name'];
$product_name=$_POST['pro_name'];
$product_price=$_POST['price'];
$product_desc=$_POST['description'];
$product_disc=$_POST['discount'];
$tfile=$_FILES["image"]["tmp_name"];
//echo $tfile;
$cat_id= mt_rand();

$result = mysqli_query($conn,"INSERT INTO product_info (category_id,category_name,sub_category_name,product_name,product_image,product_price,product_disc,product_descr)
 VALUES('$cat_id','$cat_nm','$sbcat_nm','$product_name','Pictures/$cat_nm/$product_name.jpg','$product_price','$product_disc','$product_desc')");


move_uploaded_file($tfile, "Pictures/$cat_nm/$product_name.jpg");

//header('location:admin_hmpg.php?id=19');
header('location:adminpage.php?id=06& cat_name='.$_POST['cat_name']);
?>