<?php
   include("connection.php");
   $inv= $_GET['inv'];
   $status= $_GET['status'];
   date_default_timezone_set('Asia/Kolkata');
	$currentTime = date( 'h:i:s A', time () );
	$currentDate= date('d-m-Y');
   $data="UPDATE order_info set order_Status='Cancelled',status_date='$currentDate', status_time= '$currentTime'
                            where invoice_no=$inv";
   $result= mysqli_query($conn, $data);
   header("Location: adminpage.php? id=08");
  ?>
   