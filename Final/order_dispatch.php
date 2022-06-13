<?php
include("connection.php");
$dis= $_GET['id'];
$sta= $_GET['status'];
date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'h:i:s A', time () );
	$currentDate= date('d-m-Y');
$result="UPDATE order_info set order_status='Dispatched',status_date='$currentDate', status_time= '$currentTime' where invoice_no=$dis";
$dispatch=mysqli_query($conn, $result);
header("Location: adminpage.php? id=08");
?>