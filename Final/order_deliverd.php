<?php
include("connection.php");
$in=$_GET['in'];
$del=$_GET['status'];
date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'h:i:s A', time () );
	$currentDate= date('d-m-Y');
$data2= "update order_info set order_status='Delivered',status_date='$currentDate', status_time= '$currentTime' where invoice_no='$in'";
$result1=mysqli_query($conn,$data2);
header("Location: adminpage.php? id=08");
?>