<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<style>
td{
	font-size:20px;
	font-weight:bold;
	padding:32px 120px ;
}
</style>
</head>

<body>
<?php 
include("connection.php");
	if (isset($_POST['insert1'])) 
	{
		//echo $_POST['textfield'];
		$var1=$_POST['location1'];
		$result = mysqli_query($conn,"update contactus set contactdescr='".$var1."' where contactid =1");
		if($result)
			echo "values Updated1";
		else
			echo "some problem occur1";
	}
	if (isset($_POST['insert2'])) 
	{
		//echo $_POST['textfield'];
		$var2=$_POST['location2'];
		$result = mysqli_query($conn,"update contactus set contactdescr='".$var2."' where contactid =2");
		if($result)
			echo "values Updated2";
		else
			echo "some problem occur2";
	}
	if (isset($_POST['insert3'])) 
	{
		//echo $_POST['textfield'];
		$var3=$_POST['phone'];
		$result = mysqli_query($conn,"update contactus set contactdescr='".$var3."' where contactid =3");
		if($result)
			echo "values Updated3";
		else
			echo "some problem occur3";
	}
	if (isset($_POST['insert4'])) 
	{
		//echo $_POST['textfield'];
		$var4=$_POST['email'];
		$result = mysqli_query($conn,"update contactus set contactdescr='".$var4."' where contactid =4");
		if($result)
			echo "values Updated4";
		else
			echo "some problem occur4";
	}
	if (isset($_POST['insert5'])) 
	{
		//echo $_POST['textfield'];
		$var5=$_POST['open'];
		$result = mysqli_query($conn,"update contactus set contactdescr='".$var5."' where contactid =5");
		if($result)
			echo "values Updated5";
		else
			echo "some problem occur5";
	}
?>
<form action="" method="post">
<table>
<tr><td>Location 1<br />
<textarea name="location1" id="location1" rows="5" cols="45" >
<?php
$data=mysqli_query($conn,"select * from  contactus  where contactid=1");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert1" id="insert1" value="Add Location 1" />

 </td>
<td>Location 2
<br />
<textarea name="location2" id="location2" rows="5" cols="45">
<?php
$data=mysqli_query($conn,"select * from  contactus  where contactid=2");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert2" id="insert2" value="Add Location 2" />
</td></tr>
<tr>
<td>Phone
<br />
<textarea name="phone" id="phone" rows="5" cols="45">
<?php
$data=mysqli_query($conn,"select * from  contactus  where contactid=3");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert3" id="insert3" value="Add Phone" />
</td>
<td>E-mail
<br />
<textarea name="email" id="email" rows="5" cols="45">
<?php
$data=mysqli_query($conn,"select * from  contactus  where contactid=4");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
</textarea>
<br /><br>
<input type="submit" name="insert4" id="insert4" value="Add E-mail" />
</td></tr>
<tr>
<td>Opening hours
<br />
<textarea name="open" id="open" rows="5" cols="45">
<?php
$data=mysqli_query($conn,"select * from  contactus  where contactid=5");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
</textarea>
<br />
<input type="submit" name="insert5" id="insert5" value="Add Opening Hours" />
</td></tr>
 </table>
</form>



</body>
</html>
