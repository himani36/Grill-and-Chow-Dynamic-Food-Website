<?php 

include("connection.php");
$cat_nm1= $_POST['ct_nm'];
$cat_sub_nm1= $_POST['sbct_nm'];
$ocat_sub_nm1= $_POST['tsbcat'];
echo $cat_nm1;
echo $cat_sub_nm1;
echo $ocat_sub_nm1;


$sql1="Update sub_category_info set sub_category_name = '".$cat_sub_nm1."' where category_name='".$cat_nm1."' and sub_category_name='".$ocat_sub_nm1."'" ;

 $result = mysqli_query($conn,$sql1);
 header('location:adminpage.php?id=04');
?>