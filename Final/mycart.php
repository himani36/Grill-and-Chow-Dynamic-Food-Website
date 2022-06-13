<?php
 session_start();
 error_reporting(0);
 
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}	
?>

<!Doctype html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	 margin:0px;
	 background-repeat: repeat;
	background-color:#fae6e8;
	
}
*{
	 box-sizing: border-box;
}
table,tr{
  border:1px #ed4406 solid; 
  border-collapse:collapse;
}

th {
	font: italic 20px Georgia, serif;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #ed4406;
  color: white ;
}
th, td {
	text-align: center;
  padding: 30px;    
}
table{
	width: 90%;
}
td{
	width:10%;
	font: italic 20px Georgia, serif;
}
h1{
	font: italic bold 45px Georgia, serif;
}

.mycart .fas{
 color: black;
}
.mycart::after {
  content: "";
  clear: both;
  display: table;
}
.mycart{
	width: 100%;}
	
.terms{
	font-size:22px;
	margin-left:55px;
}
@media screen and (max-width:800px)
{
	table{
	width:50%;
}
th, td {
	text-align: center;
  padding: 8px; 
  font-size: 15px;   
}
.terms{
	font-size:18px;
	margin-left:35px;
}
}		
</style>

</head>

<body>
	<div class="mycart">
	<br>

		<h1 style="text-align: center; color:black;">Order History</h1>

<center>
			<table>
			<tr>
				<th>Invoice No.</th>
				<th>Order Date</th>
				<th>Total Quantity</th>
				<th>Total Amount</th>
				<th>Order Status</th>
				<th>Status Date</th>
				<th>View</th>
			</tr>
<tr>
<?php 
include("connection.php");
$data= "select * from order_info where reg_no= '$_SESSION[reg_no]'";
$result=mysqli_query($conn,$data);
 while($row=mysqli_fetch_array($result))
 {
	 
 ?>
	
			<td>  <?php  echo $row['invoice_no']; ?></td>
			<td> <?php  echo $row['order_date'];  ?></td>
			<td>  <?php echo $row['total_quantity']; ?></td>
			<td> <?php echo $row['net_amount']; ?> </td>
			<td> <?php  echo $row['order_status']; ?> </td>
			<td> <?php  echo $row['status_date']; ?> </td>
			<td> <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <a href="invoicebill.php? name=<?php echo $row['invoice_no']; ?>"><i style='font-size:24px' class='fas'>&#xf06e;</i></a> </td>
	</tr>
	
<?php	 }
?>	
 		
</table>
</center>
<div class="terms">

<h2>NOTE:</h2>
<ul>
<li>Your order would be delivered for free if net amount exceeds Rs 999/- .</li>
<li>Cancellation request must be made through phone calls. </li>
<li>Cancellation request must be made within 10 minutes of placing order.</li>
<li> No refund will be given if cancellation request is made after 10 minutes.</li>
</ul>



</div>
</body>
</html>