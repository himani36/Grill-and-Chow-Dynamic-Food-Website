<?php
 include("connection.php");

$pnm=$_GET['pro1'];
	$pr=$_GET['pr1'];
	$ds= $_GET['dis1'];
	$qty= $_GET['Qty1'];
	$amt= $_GET['amt1'];
$net_amt= ($pr-($pr*$ds)/100)* $qty;
$sql1= "UPDATE cart SET cart_quantity= '".$qty."', net_amount='".$net_amt."' WHERE product_name='".$pnm."'";
$data=mysqli_query($conn,$sql1);

	
	header("Location:cart_order.php");
?>
	
	