 <div>
 <?php include('header.php');?>
</div>
 <div>
	  <?php include('bar.php');
	 	?>
		</div>
<!DOCTYPE html>
<html>
<head>
	<style>
	*{ box-sizing: border-box;}
body{
  margin: 0px;
  background-color:white;
  
}
.order input{
	padding:5px;
	width:50%;
	border-radius:20px;
	
}
.order label,p{
	font-size:20px;
	margin:2px;
}
	
.order{
font: italic bold 15px Georgia, serif;
background-image: linear-gradient(to bottom right,#ed4406 , #fae6e8);
background-repeat: no-repeat;
background-size: 100% 900px;
width: 40%;
margin: 5% 15%;
color:white;
font-weight:bold;
padding-top:20px;
padding-bottom:20px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.order .button{
background-color: dim grey;
border:none;
color: #ed4406;
font-size: 15px;
font-weight:bold;
border-radius:20px;
text-decoration:none;
padding: 10px;
margin-left: 60px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.6);
}
.order .button:hover{
	background-color: #ed4406;
	color: black;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
h1{
	font: italic bold 35px Georgia, serif;
	text-align:center;
}

@media screen and (max-width:800px)
{
.order{
width: 75%;
margin: 5%;
}
</style>
</head>
<body>
<h1>Customer Details</h1>
<center>
	<form action="placeorder.php" method="post">
	
	<div class="order">

	
		<label for="uname">Customer's Name:</label><br>
		<input type="text" name="username"  placeholder="Enter Name" required><br><br>

		<label for="address">Customer's Address:</label><br>
        <input type="text" name="line1"  placeholder="Line 1" required><br><br>
        <input type="text" name="line2"  placeholder="Line 2" required><br><br>
        <input type="text" name="city"  placeholder="City" required><br><br>
        <input type="text" name="state"  placeholder="State" required><br><br>
        <input type="text" name="pin"  placeholder="Pincode" required><br><br>

        <label for="uname">Contact Number:</label><br>
		<input type="text" name="phone"  placeholder="Enter Number" required><br><br>

		<p>Payment Mode:</p>
		<input  type="radio" id="cash" name="paymentmode" value="cash" style="width:20px;">
		<label for="cash">Cash On Delivery</label><br>
		<input type="radio" id="credit" name="paymentmode" value="credit" style="width:20px;">
 		<label for="debit">Credit Card</label><br>
		<input type="radio" id="javascript" name="paymentmode" value="debit" style="width:20px;">
		<label for="debit">Debit Card</label>

		<br><br><br><p>Card Details:(if chosen)</p>
		<input type="text" name="card"  placeholder="Card Number" ><br><br>
		<input type="text" name="exp"  placeholder="Expiration Date" ><br><br>
		<input type="text" name="cvv"  placeholder="Cvv No." ><br><br>

       <input type="submit" name="submit" value="Submit" style="width:150px; color:#ed4406; font-weight:bold;">
	
		</div>
		
	</form>
	
</center>
</body>
</html>
<div>
 <?php include('staticpic.php');?>
</div>

 <div>
 <?php include('footer.php');?>
</div>

 