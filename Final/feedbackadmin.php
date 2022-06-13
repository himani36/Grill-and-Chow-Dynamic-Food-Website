<!DOCTYPE html>
<html>
<head>
</head>
<body><br><br><br><br>
<h1 style= "text-align:center;"> Feedback Details</h1>
<table  align="center" border="3px solid black">
<tr>
<th>Name</th>
<th>Email</th>
<th>Feedback</th>
</tr>
<tr>
<?php
include("connection.php");
$feed=mysqli_query($conn,"select * from feedback");
while($row=mysqli_fetch_array($feed)){
	?>
<td>
<?php echo $row['name'];
?>
</td>
<td>
<?php echo $row['email'];
?>
</td>
<td>
<?php echo $row['feedback'];
?>
</td>
</tr>
<?php 
}
?>
 
</table>
</body>

</html>