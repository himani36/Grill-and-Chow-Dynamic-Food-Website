

<!DOCTYPE html >
<html>
<head>
</head>

<body>
<center>
<form action="category_save.php"  method="post">
<table><br><br><br><br>
<h1 style= "text-align:center;">Product Category</h1>
<tr><td><b> Category</b><br /><input type="text" value="" size="50" name="t1" /></td></tr>
<tr><td>
<input name="Save" type="submit" value="save">
</td></tr>
 </table>
 </form>

<?php
include("connection.php");
$data=mysqli_query($conn,"select * from  category_info order by category_name");
?>
<h2 style="text-align:center;">List</h2>
<table style="text-align:center;" width='30%' border='1'  cellspacing="5">
<tr><th colspan="3">Category Name</th></tr>
<tr> 
<?php
while($row=mysqli_fetch_array($data))
{
?> 
<tr>
<td > <b> <?php echo $row['category_name']; ?> </b></td><td><a href="category_delete.php?id=<?php echo $row['category_name']; ?>" ><img src="Pictures/cross.png" width="20" height="20"/></a></td>
</tr>
<?php } ?>
</table>
</center>


</body>
</html>