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
.textt{
	width: 50px;
	height: 20px;
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
.order .button{
float:right;
padding:15px;
color:white;
background-color:#ed4406;
border-radius:50px;
font-size:22px;
text-align: center;
margin-right: 120px;
margin-top: 15px;
text-decoration: none;
}
.order .butt{
padding:5px;
color:white;
background-color:#ed4406;
border-radius:50px;
font-size:12px;
text-align: center;
margin: 10%;

}
.order .button:hover{
background-color:coral;
color:#fef6f4;
}
.order::after {
  content: "";
  clear: both;
  display: table;
}
.order{
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
	<div class="order">
	<br>

		<h1 style="text-align: center; color:black;">Customer Orders</h1>

<center>
			<table>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Price</th>
				<th>Discount</th>
				<th>Quantity</th>
				<th>Net Amount</th>
				<th>Delete</th>
			</tr>

						<?php
include("connection.php");
$sql1="select * from cart order by product_name";
$i=1;
$tot_net_amt=0;
$tot_qty=0;

$data=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_array($data))
{
	$pnm="pro".$i;
	$pr="pr".$i;
	$ds= "dis".$i;
	$qty= "Qty".$i;
	$amt= "amt".$i;

?><tr>
	
 		
			<td style="width:20%"><img src="<?php echo $row['product_image']; ?>" height="100px" width="120px"></td>
			<td style="color:#ed4406;">  <?php echo $row['product_name']; ?></td>
			<td> Rs.<?php echo $row['cart_price']; ?></td>
			<td>  <?php echo $row['cart_disc']; ?>% OFF</td>
			<td>
			<form method="get" action="cart_calc.php">
				<input class="textt" type="number"  name="<?php echo $qty; ?>" min="1" max="25" value="<?php echo $row['cart_quantity']; ?>" >
			 
				<input type="hidden" name="<?php echo $pnm; ?>" value="<?php echo $row['product_name']; ?>">
				<input type="hidden" name="<?php echo $pr; ?>" value="<?php echo $row['cart_price']; ?>">
				<input type="hidden" name="<?php echo $ds; ?>" value="<?php echo $row['cart_disc']; ?>">
					<input class="butt" type="submit" value="Change">
 	
			
			</td>
			
		<td>
			
			<input class="textt" type="text"  name="<?php echo $amt; ?>" value="<?php echo $row['net_amount']; ?>">
			</td>
			<td><a href="cart_delete.php?id=<?php echo $row['product_name']; ?>" ><img src="Pictures/cross.png" width="40" height="30"/></a></td>
			</form>
		
	
<?php

$tot_net_amt=$tot_net_amt + $row['net_amount'];
$tot_qty=$tot_qty + $row['cart_quantity'];

}
?>
</table>
</center>
<h2 style="float:left; margin-left:100px; font: italic bold 30px Georgia, serif;">Total Item Quantity: <?php echo $tot_qty; ?> </h2>

<h2 style="float:left; margin-left:120px; font: italic bold 30px Georgia, serif;">Total Amount: <?php echo $tot_net_amt; ?> </h2>

<a href="order.php" class="button">Place order</a>	

</div>
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