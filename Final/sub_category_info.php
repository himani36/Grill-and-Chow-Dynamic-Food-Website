
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<?php
include("connection.php");
$data=mysqli_query($conn,"select * from  category_info order by category_name");
?>

<form action="sub_category_save.php"  method="post">

<table>
<tr><td> <h1>Product's Subcategory</h1></td></tr>
<tr><td> <b>Category</b></td>  </tr>
<tr>
<td>
<select name="s1">

<?php
while($row=mysqli_fetch_array($data))
{
?>

<option value="<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></option> ; 
<?php
 }
 ?> 
</select>


</td></tr>
<tr><td><br> <b>Subcategory</b><br /><input type="text" value="" size="20" name="t1" /></td></tr>
<tr><td>
<input name="Save" type="submit" value="save">
</td></tr>
 </table>
 </form>

<?php
include("connection.php");
$data=mysqli_query($conn,"select * from  sub_category_info order by category_name,sub_category_name") ;
?>
<h2>Category and Subcategory List</h2>
<table border='1'  cellspacing="5" width="500">
<tr><th>Category</th>
<th>Subcategory Name</th><th>Edit</th><th>Delete</th></tr>
<tr> 
<?php
while($row=mysqli_fetch_array($data))
{
?> 
<tr>
<td > <b> <?php echo $row['category_name']; ?> </b></td>
<td><b> <?php echo $row['sub_category_name']; ?> </b></td>
<td><a href="adminpage.php?id=16&cat2=<?php echo $row['sub_category_name']; ?>&cat1=<?php echo $row['category_name']; ?> " >
<img src="Pictures/cross.png" width="20" height="20"/></a>
</td>
<td><a href="sub_category_delete.php?cat2=<?php echo $row['sub_category_name']; ?>& cat1=<?php echo $row['category_name']; ?>" >
<img src="Pictures/cross.png" width="20" height="20"/></a></td>

</tr>
<?php } ?>

</table>
</center>


</body>
</html>