<?php
	session_start();
	error_reporting(0);
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
		
	}
	if(!isset($_SESSION['reg_no']))
	{
		$_SESSION['reg_no']="0";
		
	}
?>
<!Doctype html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	width: 100%;
	margin: 0px;
}
.header{
	background-color: #ed4406;
	height:95px;
	background-image: url("Pictures/logo (2).png");
	background-repeat: no-repeat;
	background-size: 140px 110px;
	background-position: 60px -5px;
}
.header .button{
	float: right;
	background-color: white;
	border: none;
	font-size: 20px;
	font-weight:bold;
	color:#ed4406;
	border-radius:30px;
	padding:10px 30px;
	margin-top: 25px;
	margin-right: 30px;
	text-decoration:none;
}
.header .but{
	float: right;
	background-color: white;
	border: none;
	font-size: 20px;
	font-weight:bold;
	color:#ed4406;
	border-radius:30px;
	padding:10px 30px;
	margin-top:-30px;
	margin-right:10px;
	text-decoration:none;
	}
	.welcome{
		color:white; 
		font: italic 23px Georgia, serif;
		margin-left: 500px; }
.header .button:hover{
background-color:#fef6f4;
color:#ed4406;
}
@media screen and (max-width:800px)
{
	.header .button{
		padding: 2%;
		font-size: 15px;
		margin-bottom: 15px;
			margin-top: 5px;

  }
   .header .but{
  padding: 2%;
		font-size: 15px;
		border: 2px solid #ed4406;

  }
  .welcome{
  font: italic 18px Georgia, serif;
  margin-left: 155px;
}
.header{
	background-position: 20px -5px;
}
}
</style>
</head>

<body>
	<div class="header">
	
		<?php
		if($_SESSION['usr_nm1']=="guest")
		{
	?>
	<a href="newlogin.php" class="button">Log in</a>
	
		<?php
		}
		else
		{
	?>
   
    <a href="logout.php" class="button">Log out</a><br><br><br><span class="welcome"><?php echo "Welcome ".$_SESSION['usr_nm1'];?>!</span>
     <a href="viewprofile.php" class="but">View Profile</a>
    <?php
		}
	?>
	
	</div>
</body>