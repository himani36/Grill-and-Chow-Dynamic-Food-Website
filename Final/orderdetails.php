
<html>
<head>
<style>
th,td,a{
	text-align:center;
	
}
div a{
	padding:10px;
	font-size:20px;
	background-color:pink;
	text-decoration: none;
	
}

</style>
</head>
<body><br><br><br><br>
<h1 style= "text-align:center;">Order Details</h1>
<div ><center>
<a href="adminpage.php?id=17">Cancelled Orders</a>
<a href="adminpage.php?id=27">Dispatched Orders</a>
<a href="adminpage.php?id=37">Delivered Orders</a>
</center></div><br><br>
<table align="center" border="3px solid black">
 <tr>
  <th> Invoice No.</th>
  <th> Name </th>
  <th> Order Date</th>
  <th> Total Quantity</th>
  <th> Total Amount</th>
  <th> Order Status</th>
  <th> Cancel Order</th>
  <th> Dispatched</th>
  <th> Delivered</th>
  <th> Status Date</th>
 </tr>
 <?php 
include("connection.php");
$data= "select * from order_info";
$result=mysqli_query($conn,$data);
 while($row=mysqli_fetch_array($result))
 {
	 
 ?>
	
			<td>  <?php  echo $row['invoice_no']; ?></td>
			<td> <?php  echo $row['customer_name'];  ?></td>
			<td> <?php  echo $row['order_date'];  ?></td>
			<td>  <?php echo $row['total_quantity']; ?></td>
			<td> <?php echo $row['net_amount']; ?> </td>
			<td> <?php  echo $row['order_status']; ?> </td>
			<td><a href="order_cancel.php?inv=<?php echo $row['invoice_no']?> & status=<?php echo $row['order_status']; ?>"> 
			    <img src="Pictures/cross.png" height="20px" width="20px"></a></td>
			<td><a href="order_dispatch.php ?id= <?php echo $row['invoice_no']?> & status=<?php echo $row['order_status']; ?>"  > <img src="Pictures/cross.png" height="20px" width="20px"></a></td>
			<td><a href="order_deliverd.php ?in=<?php echo $row['invoice_no']?> & status=<?php echo $row['order_status']; ?>"> <img src="Pictures/cross.png" height="20px" width="20px"></a></td>
			<td> <?php  echo $row['status_date']; ?> </td>
            
			</form>
	</tr>

<?php	 }
?>	
 </table>
 </body>
 </html>
  