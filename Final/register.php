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
	background-size: 100% 900px;;
}
.grad1{
  background-color: white;
  width: 35%;
  height:670px;
  margin-top: 3%;
  margin-left: 33%;
  padding: 10px 25px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.login h2{
margin-top: 0px;
  color: black;
  font: italic bold 35px Georgia, serif;
  text-align: center;
  margin-bottom: 0px;
   margin-left: -35px;
}
.grad1 label{
  font-size: 25px;
  font-weight: bold;
  color: #ed4406;
}
.grad1 input{
  width: 90%;
  height: 30px;
  border: 2px solid dimgray;
  margin: 5px 20px;
  border-radius: 30px;

}

.grad1 button{
  font: italic bold 20px Georgia, serif;
  background-image: linear-gradient(to bottom right,#ed4406 , #fae6e8);
  color: black;
  border: none;
  font-size: 26px;
  font-weight:bold;
  border-radius:30px;
  padding:10px 30px;
  text-decoration:none;
  box-shadow: 0 8px 16px 0 rgba(237, 68, 6, 0.15) ;
}
.grad1 .button:hover{
  background-image: none;
  background-color: white;
  border: 3px solid #ed4406;
}
form{
  padding:  5px 10px;
  
}
.grad1 .button2{
	border: 2px solid dimgray;
	color: #ed4406;
	font-size: 20px;
	font-weight:bold;
	border-radius:30px;
	text-decoration:none;
	padding: 10px;
	margin-left: 10px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.grad1 .button2:hover{
	background-color: #ed4406;
	color: black;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}
.grad1 i{
	font-size:30px;
	float:right;
	margin-top:-55px;
	color: #ed4406;
}
.grad1 i a{
	color: #ed4406;
}
@media screen and (max-width:950px){
  .grad1{
    margin: 10px 20%;
    padding-top: 10%;
    text-align: center;
      width: 60%;
	  height:750;
      font-size:22px;

  }
  }
@media screen and (max-width:800px)
{
	.grad1{
		margin:10% ;
		padding-top: 10%;
		text-align: center;
	    width: 82%;
	    font-size:22px;
		 height:850px;
  }
  .grad1 h2{
    font-size:32px;
  }
   .grad1 .button2{
  	margin-left: 2%;
  }
}
</style>
</head>
<body>
<div class="grad1">
  <div class="login">

    <h2>Registration Form</h2><br>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         <i class="material-icons"><a href="index.php">&#xe5c9;</a></i>
        <form action="registerform.php" method="post">
        <label for="nname">Name:</label><br>
        <input type="text" name="nname" required><br><br>
        <label for="cname">Contact:</label><br>
        <input type="text" name="cname" required><br><br>
		<label for="ename">E-mail</label><br>
        <input type="email" name="ename" required><br><br>
        <label for="sname">Password:</label><br>
        <input type="password" name="sname" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
		<label for="jname">Confirm Password:</label><br>
        <input type="password" name="jname" required><br><br>

        <center>
        <button>Register</button>
		<h3>Already registerd? Log in here!<h3>
        		<a href="newlogin.php" class="button2">Log in</a><br><br>
                </form>
    </div>
  </div>
</body>
</html>