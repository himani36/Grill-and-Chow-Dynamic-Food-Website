<?php
 session_start();
 error_reporting(0);
 
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
	}
include("connection.php");
$name= $_POST['nm'];
$contact= $_POST['cont'];
$email= $_POST['email'];
$opwd= $_POST['opass'];
$pwd= $_POST['npass'];
$cpwd= $_POST['cpass'];
$data= mysqli_query($conn,"Select * from register where reg_no='$_SESSION[reg_no]'");
while($row=mysqli_fetch_array($data))
{
	$ocpwd= $row['pwd'];

echo $opwd;
echo $pwd, $cpwd;
echo $ocpwd;
echo $_SESSION['reg_no'];

if($opwd==$ocpwd)
{
	if($pwd==$cpwd){
			$sql = "UPDATE register SET name='$name', contact='$contact', email='$email', pwd='$pwd', cpwd='$cpwd'
			where reg_no='$_SESSION[reg_no]'";
			if (mysqli_query($conn, $sql)) 
			{
				header("Location:viewprofile.php");
				echo $sql;
			}
			else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
	else{
		echo "<script>alert('Passwords do not match');</script>";
	}

} 

else{
	echo "<script>alert('Incorrect Old Password');</script>";
	
	//include("register.html");
}
}

?>