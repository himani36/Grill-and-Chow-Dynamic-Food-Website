
<?php
session_start();
 error_reporting(0);
	$tinv_no='0';
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
		
	}	
	if(isset($_SESSION['inv_no']))
	{
	
		$tinv_no= $_SESSION['inv_no'];
	}
	//$tinv_no='1019';
	
	
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
	margin: 60px;
background-color: white;

}
.headin{
	
	background-color: #fef6f4;
}
tr{
	background-color: #fef6f4;
}
h1{
	font: italic bold 45px Georgia, serif;
	text-align: center;
}
p,h5{
	font: italic 20px Georgia, serif;
	margin-left: 120px;

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
	width: 75%;
}
td{
	width:10%;
	font: italic 20px Georgia, serif;
}
.payment{
	margin-left: 40px;
	display: inline-block;
}
.pay{
	display: inline-block;
	margin-left: 280px;
}
.bill{
border:5px black double;}
.bill:after{ content:" "; display:inline-block; clear:both; }
.no{
	margin-left: 140px;
	margin-right: 370px;
	display: inline-block;
}
.inv{
	display: inline-block;
}	

img{
	width: 150px;
	height: 150px;
	margin-left: 480px;
	margin-top:-10px;
}
h2{
	font: italic  bold 40px Georgia, serif;
	color: #ed4406;
	text-align: center;
}
.addr{
    Text-align:center;
	font: italic   22px Georgia, serif;
}
.button{
float:right;
height:40px;
width:150px;
padding-top:8px;
color:white;
background-color:#ed4406;
border-radius:50px;
border:none;
font-size:22px;
margin-top: -50px;
margin-right: 30px;
text-align: center;
text-decoration:none;
}
 .button:hover{
background-color:coral;
color:#fef6f4;
}
</style>
</head>
<a href="index.php" class="button">Home Page</a>	
<body>


<?php
	if($tinv_no == '0')
	{
			echo "Invoice Number is Not Selected ";
			echo "<a href='index.php'> Back </a>";
	}
	else
	{
?>

<div class="bill">

	<div class="headin">
	<h2><u>Grill And Chow Receipt</u></h2>
	<img src="Pictures/logo.png">
	<div class="addr">
25, Ishmeet Singh Rd, Shastri Nagar, Model Town,<br>
Ludhiana, Punjab 141001, India<br><br>

<b>Phone : </b>+91-81461-20667, 98149-20667<br>
<b>Email :</b> info@bakefresh.in<br><br>
</div>
	</div>
	
	<?php
			include("connection.php");
			$data1=mysqli_query($conn,"select * from  order_info where invoice_no=$tinv_no");
			while($row=mysqli_fetch_array($data1))
			{
		 ?>
			  
				<div class="hed">
					<div class="det">
							<h3 style="color:#ed4406; text-align:center; font-size:30px; "><b>INVOICE</b></h3>
							<p class="no">Invoice no. :<?php echo $row['invoice_no']; ?><br>   Date:<?php echo $row['order_date']; ?>
							<br>   Time:<?php echo $row['order_time']; ?></p>
							<p class="inv" >Invoice for:<br>
							Name: <?php echo $row['customer_name']; ?><br>
							Address: <?php echo $row['ad_line1']; ?> <?php echo $row['ad_line2']; ?> ,<?php echo $row['ad_city']; ?></p>
						</div>

			<?php
			}
			?>
		</div>
<div class="thanks">
						<h1 ><u>Thanks For Ordering</u></h1>
						</div>

		<div class="table">
							<table align="center">
							<tr>
								<th>S no.</th>
								<th>ITEM(s)</th>
								<th>QUANTITY</th>
								<th>PRICE</th>
								<th>DISCOUNT</th>
								<th>TOTAL</th>
							</tr>
							<tr>
						<?php
						include("connection.php");
						$i=1;
						$data=mysqli_query($conn,"select * from  order_det  where invoice_no=$tinv_no");
						while($row=mysqli_fetch_array($data))
						{
						  ?>
								<td><?php echo $i++;  ?></td>
								<td> <?php echo $row['product_name']; ?></td>
								<td><?php echo $row['cart_quantity']; ?></td>
								<td>Rs.<?php echo $row['cart_price']; ?></td>
								<td><?php echo $row['cart_disc']; ?>%</td>
								<td>Rs.<?php echo $row['net_amount']; ?></td>
							</tr>
						<?php
						}
						?>
								</table>
				</div>
<br><div class="bot">

		<?php
include("connection.php");
$data1=mysqli_query($conn,"select * from  order_info  where invoice_no=$tinv_no");
while($row=mysqli_fetch_array($data1))
{
  ?>
		<div class="payment">
		<p><b><u>Payment Info:</u></b></p>
		<p>Mode of Payment:<?php echo $row['mop']; ?></p>
	</div>
	<div class="pay">
	<br>
		<p><b><u>Bill Information:</u></b><br></p>
		<p><b>Total Quantity: </b>  <?php echo $row['total_quantity']; ?><br>
		<b>Total Amount: </b> Rs. <?php echo $row['net_amount']; ?></p>
	</div>
	<h2>Eat As Much As You Like!</h2>
</div>

<?php
}
?>
</div>

<?php 
	}
?>
</body>
</html>