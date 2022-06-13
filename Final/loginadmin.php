<!DOCTYPE html>
<html>
<head>
</head>
<style>
th,tr{ 
padding:5px;
text-align:center;

}

</style>
<body><br><br><br><br>
<h1 style= "text-align:center;"> Login Details</h1>
<table align="center" border="3px solid black">
<tr>
<th>Registration no.</th>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Password</th>
</tr>
<tr>
<?php
include("connection.php");
$login=mysqli_query($conn,"select * from register");
while($row= mysqli_fetch_array($login)){
	?>
	<td>
	<?php echo $row['reg_no'];
	?>
	</td>
	<td>
	<?php echo $row['name'];
	?>
	</td>
	<td>
	<?php echo $row['contact'];
	?>
	</td>
	<td>
	<?php echo $row['email'];
	?>
	</td>
	<td>
	<?php echo $row['pwd'];
	?>
	</td>
	</tr>
	
	<?php
}
?>

	
	
</table>
</body>
</html>