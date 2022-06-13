<?php 
 session_start();
 include("connection.php");
 error_reporting(0);
?>
<!Doctype html>
<html>
<head>
<style>
body{
	width: 100%;
	margin: 0px;
}
.bar{
width:100%;
background-color:white;
height:60px;
}
.bar ul{
list-style-type: none;
float: left;
}
.bar li{
display: inline;
font-size: 20px;
font-weight: bold;
}
.bar li a {
text-decoration: none;
padding: 18px;
color: #3d4045;
}
.bar li a:hover{
color:#ed4406;
}
.bar .button{
float:right;
height:40px;
width:150px;
padding-top:8px;
color:white;
background-color:#ed4406;
border-radius:50px;
border:none;
font-size:22px;
margin-top: -30px;
margin-right: 30px;
text-align: center;
text-decoration:none;
}
.bar .button:hover{
background-color:coral;
color:#fef6f4;
}
.bar img{
float: left;
width: 280px;
height: 60px;
margin-right: -50px;
}
.bar i a{
	color:white;
	background-color:#ed4406;
	padding:8px;
	border-radius:100%;
}
.bar .icon {
	float: right;
	color:white;
	border: 4px solid white;
	background-color:#ed4406;
	padding:8px;
	font-size:23px;
    display: none;
}

@media screen and (max-width: 800px) {
  .bar a:not(:first-child) {display: none;}
  .bar img{
float: left;
width: 280px;
height: 60px;
}
  .bar a.icon  {
    float: right;
    margin-left: 160px;
    display: inline;
  }
}

@media screen and (max-width: 800px) {
  .bar.responsive {position: relative;}
  .bar.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .bar a, .icn
  {
  	display: none;
  }
  .bar.responsive a {
    float: none;
    display: block;
    text-align: left;
    margin-bottom: 4%;
  }

.bar.responsive .button{
	position: absolute;
	top: 300px;
	left: 60px;
	padding-left: 20px;
}
.bar.responsive .icn{
	display: inline;
	position: absolute;
	top: 250px;
	left: 230px;
}

}
</style>
</head>

<body>
	<div class="bar" id="myTopnav">
		<img src="Pictures/grill&chowlogo.png">
		<ul>
			<li><a href="index22.php">Home</a></li>
			<li><a href="aboutus.php">About Us</a></li>
            <li><a href="menu.php">Menu</a> </li>
   			<li><a href="feedbackpage.php">Feedback</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			 <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>	
		</ul>
		
		<?php
			if($_SESSION['usr_nm1'] != 'guest')
			{
				$count1=0;
				$data1= "select * from cart where reg_no='$_SESSION[reg_no]'";
				//echo $data1;
				$result1 = mysqli_query($conn, $data1);
				$count1= mysqli_num_rows($result1);
				
					
		?>
		    <div class="icn">
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<i class="fa" style="font-size:23px; margin-left: 200px; margin-top: 16px;"><a href="cart_order.php">&#xf07a; </a></i>
			<span style="position:relative; top:-20px; left:-5px; font-weight:bold;"> <?php echo $count1; ?></span>
			</div>
			<a href="myorders.php" class="button">My Orders</a>	
		<?php
			}
		?>
	</div>

	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "bar") {
    x.className += " responsive";
  } else {
    x.className = "bar";
  }
}
</script>	
</body>
</html>