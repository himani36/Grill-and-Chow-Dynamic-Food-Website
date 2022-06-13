
<?php
	session_start();
	error_reporting(0);
	$mess1="";
	if(isset($_POST['loginbtn']))
	{
		$unm=$_POST['uname'];
		$psd=$_POST['pname'];
			include("connection.php");
		$sql1="select * from register where name ='$unm' and pwd='$psd'" ;
			
		$result = mysqli_query($conn, $sql1);

         if (mysqli_num_rows($result) ==1) 
	    {
		    $row = mysqli_fetch_assoc($result);
			$_SESSION['usr_nm1']= $row['name'];
			$_SESSION['reg_no']= $row['reg_no'];
		
				header("Location:project.php");
		}
		else
		{
			$mess1="invalid";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{ box-sizing: border-box;}
body{
	margin: 0px;
	background-image: url("Pictures/bdform1.jpg") ;
	background-repeat: no-repeat;
	background-size: 100% 900px;
	
}
.grad{
	background-color: white;
	width: 35%;
	height:600px;
	margin-top: 3%;
	margin-left: 33%;
	padding: 10px 25px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.grad h3{
	font-size: 20px;
	color: black;
}
.grad p{
	margin-top: 0px;
	color: #ed4406;
	font: italic bold 40px Georgia, serif;
	text-align: center;
	margin-bottom: 0px;

}
.grad img{
	width: 120px;
	height: 120px;
    margin: 1% 36%;
}
.grad label{
	font-size: 25px;
	font-weight: bold;
	color: #ed4406;

}
.grad input{
	width: 90%;
	height: 30px;
	border: 2px solid dimgray;
	margin: 5px 20px;
	border-radius: 30px;

}
.grad button{
	font: italic bold 20px Georgia, serif;
	background-image: linear-gradient(to bottom right,#ed4406 , #fae6e8);
	color: black;
	border: none;
	font-size: 24px;
	font-weight:bold;
	border-radius:30px;
	padding:10px 30px;

	text-decoration:none;
	box-shadow: 0 8px 16px 0 rgba(237, 68, 6, 0.15) ;
}
.grad button:hover{
	background-image: none;
	background-color: white;
	border: 2px solid #ed4406;

}
.grad i{
	font-size:30px;
	float:right;
	margin-top:-38px;
	color: #ed4406;
}
.grad i a{
	color: #ed4406;
}
.grad .button2{
	border: 2px solid dimgray;
	color: #ed4406;
	font-size: 20px;
	font-weight:bold;
	border-radius:30px;
	text-decoration:none;
	padding: 10px;
	margin-left: 107px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.grad .button2:hover{
	background-color: #ed4406;
	color: black;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
@media screen and (max-width:950px){
	.grad{
		margin: 10px 20%;
		padding-top: 10%;
		text-align: center;
	    width: 60%;
	    font-size:22px;

  }
 
}

@media screen and (max-width:800px)
{
	.grad{
		margin:10% ;
		padding-top: 5%;
		text-align: center;
	    width: 80%;
	    font-size:22px;
  }
   .grad .button2{
  	margin-left: 2%;
  }
}
</style>

</head>

<body>
<div class="grad">
     
		<p>Welcome</p>
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <i class="material-icons"><a href="index.php">&#xe5c9;</a></i>
		<img src="Pictures/login.png">
        	<form action="#" method="post">
        		<label for="uname">Username:</label><br>
       			 <input type="text" id="uname" name="uname"><br><br>
        		<label for="pname">Password:</label><br>
        		<input type="password" id="pname" name="pname"><br><br>
				<center> <button name="loginbtn" value="Login">Log in</button></center>
				<!-- <input type="submit" name="loginbtn" value="Login" />
				
        		<center><a href="#" class="button1" name="loginbtn" >Login</a></center>-->
				<br>
        		<h3>Don't have an account?</h3>
        		<a href="register.php" class="button2">+ New Registration</a><br><br>
        	</form>
			<h3> <?php  echo $mess1; ?></h3>
   </div>
</body>
</html>