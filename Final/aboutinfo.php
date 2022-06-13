<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<style>
td{
	font-size:20px;
	font-weight:bold;
	padding:50px;
	margin:50px;
}
</style>

</head>

<body>
<?php 
include("connection.php");
	if (isset($_POST['insert1'])) 
	{
		//echo $_POST['textfield'];
		$var1=$_POST['ourstory'];
		$result = mysqli_query($conn,"update aboutus set descr='".$var1."' where id =1");
		if($result)
			echo "values Updated1";
		else
			echo "some problem occur1";
	}
	if (isset($_POST['insert2'])) 
	{
		//echo $_POST['textfield'];
		$var1=$_POST['heritage'];
		$result = mysqli_query($conn,"update aboutus set descr='".$var1."' where id =2");
		if($result)
			echo "values Updated1";
		else
			echo "some problem occur1";
	}
	
	
?>

<form action="" method="post">
<table align="center">
<tr><td>Our Story<br />
<textarea name="ourstory" id="ourstory" rows="10" cols="40" >
<?php
$data=mysqli_query($conn,"select * from  aboutus  where id=1");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert1" id="insert1" value="Add Our Story" />

 </td>
<td>Heritage
<br />
<textarea name="heritage" id="heritage" rows="10" cols="40">
<?php
$data=mysqli_query($conn,"select * from  aboutus  where id=2");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert2" id="insert2" value="Add Heritage" />
</td></tr>
 </table>
</form>
</body>
</html>
