 <div>
 <?php include('header.php');?>
</div>
 <div>
	  <?php include('bar.php');
	 	?>
		</div>

<?php
 session_start();
 error_reporting(0);
 
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
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
  background-color: #fef6f4;
}
.view{
  background-image: linear-gradient(to bottom right,#ed4406 , #fae6e8);
  background-repeat: no-repeat;
  background-size: 100% 900px;
  width: 40%;
  margin-top: 5%;
  margin-left: 30%;
  margin-bottom: 10%;
  padding: 10px 25px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
}
.view td{
  color: white;
  font: italic 20px Georgia, serif;
  text-align: center;
  margin-bottom: 0px;
    margin-top: 3px;
}
.view input{
  width: 85%;
  height: 30px;
  border: 2px solid dimgray;
  margin: 5px 20px;
  border-radius:20px;
  padding-left:15px;
}


.view a:hover{
  background-image: none;
  background-color: white;
  border: 2px solid #ed4406;
}
.view form{
  padding: 10px 10px;
  }
  @media screen and (max-width:950px)
{
   .view{
    width: 80%;
	margin: 10%;
}
 }
 .view h1{
	 text-align:center;
	 color:white;
	   font: italic bold 30px Georgia, serif;
 }
 .view a{
	 font-size:20px;
	 color:#ed4406;
	 background-color:white;
	 padding:5px 20px;
	 border-radius:20px;
	 border:2px solid dimgray;
	 text-decoration:none;
	 margin-top:20px;
	 margin-left:100%;
	 
 }
	 

</style>
</head>

<body>
<div class="view">
    <h1>Edit Profile</h1>
<?php
include("connection.php");
$data=mysqli_query($conn,"select * from  register where reg_no='$_SESSION[reg_no]'");
while($row=mysqli_fetch_array($data))
{
?>
<form action="profile_update.php"  method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td> Name</td>
        <td>
            <input type="text"  name="nm" value="<?php echo $row['name']; ?>" />
        </td>
    </tr>
    <tr>
        <td> Contact No.</td>
        <td>
            <input type="text" name="cont" value="<?php echo $row['contact']; ?>" size="20" />
        </td>
    </tr>
    <tr>
        <td> E-mail</td>
        <td>
            <input type="text" name="email" value="<?php echo $row['email']; ?>" size="40"  />
        </td>
    </tr>
 <tr>
 <?php 
 $opwd=$row['pwd'];
 ?>
        <td> Old Password</td>
		<td> <input type="text" name="opass" value="" size="20" />
            
        </td>
    </tr>
    <tr>
        <td> Password</td>
		<td> <input type="text" name="npass" value="" size="20" />
            
        </td>
    </tr>

    <tr>
        <td> Confirm Password</td>
        <td>
            <input type="text" name="cpass" value="" size="20"  />
        </td>
    </tr>
    
    <tr>
        <td>
        <!--<input style=" padding:20px; margin-left:90%; margin-top:20px; text-align:center; font-size:20px;" class="button" name="submit" type="submit" value="Update">
        -->
		<br><br><a href="profile_update.php">Update</a>
		</td>
    </tr>

 </table>
 </form>
 <?php
 }
 ?>
 </div>
</body>
</html>
<div>
 <?php include('staticpic.php');?>
</div>

 <div>
 <?php include('footer.php');?>
</div>

 