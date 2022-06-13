<?php

$name= $_POST['nname'];
$contact= $_POST['cname'];
$email= $_POST['ename'];
$pwd= $_POST['sname'];
$cpwd= $_POST['jname'];


include("connection.php");
if($pwd==$cpwd)
{
	$sql = "INSERT INTO register (name,contact,email,pwd,cpwd)
	VALUES ('$name','$contact','$email','$pwd','$cpwd')";
	if (mysqli_query($conn, $sql)) 
	{
		header("Location:login.php");
	}
	else 
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

} 

else{
	echo "<script>alert('Passwords do not match');</script>";
	
	include("register.html");
}


?>