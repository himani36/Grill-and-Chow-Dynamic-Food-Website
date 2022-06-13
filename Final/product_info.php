<?php
$stcat="";
if(isset($_REQUEST['save']))
{
	$stcat= $_REQUEST['save'];
	echo $stcat;
}
?>	

<!DOCTYPE html>
<head>
<title>Product Info</title>
<style>
select{
	margin:10px;
}
table{margin:20px;}
input{padding:10px;font-size:20px; margin:8px;}

.desc,label{width:480px;height:150px;font-size:20px;}
option{
font-size:20px;
padding:10px;
}
</style>
</head>
<body><center>
<form action="product_save.php"  method="post" enctype="multipart/form-data">
<table>
<br><br><br><br>
<h1>PRODUCT INFORMATION</h1>
<tr><td><label>Choose a category:</label>
  <select style="font-size:20px;" name="cat_name">

  <?php
  include("connection.php");
$data=mysqli_query($conn,"select * from  category_info order by category_name");
while($row=mysqli_fetch_array($data))
{
  ?>
  <option value="<?php echo $row['category_name']; ?>"> <?php echo $row['category_name']; ?></option>
<?php
}
?>
  </select>
  <tr><td><label>Subcategory:</label>
  <select style="font-size:20px;" name="sub_cat_name">

  <?php
  include("connection.php");
$data=mysqli_query($conn,"select * from  sub_category_info order by sub_category_name");
while($row=mysqli_fetch_array($data))
{
  ?>
  <option value="<?php echo $row['sub_category_name']; ?>"> <?php echo $row['sub_category_name']; ?></option>
<?php
}
?>
  </select>
</td></tr>
<tr>
<td><input type="text" value=""  name="pro_name" placeholder="Product name" /></td></tr>
<tr>

<tr>
<td><label>Image:</label><input type="file" value=""  name="image" placeholder="Image" /></td></tr>
<tr><td><label style="font-size:20px;">RS:</label><input type="text" value="" name="price" placeholder="Price" /></td></tr>
<tr><td><label style="font-size:20px;">Discount:</label><input type="text" value="" name="discount" placeholder="Discount" /></td></tr>

<tr><td colspan="2"><textarea class="desc"  type="text" value="" name="description" placeholder="Description" /></textarea>
<tr><td><input name="save" type="submit" value="Save"></td></tr>

</table>



<h4>List</h4>
<table border='1'  cellspacing="5">

<tr>
  <th >Category name</th>
  <th >Sub Category</th>
 <th >Product Name </th>
 <th> image</th>
 <th >Price</th>
 <th >Discount</th>
 <th >Description</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>

<?php
include("connection.php");
$data=mysqli_query($conn,"select * from  product_info");
while($row=mysqli_fetch_array($data))
{
?> 
<tr>

<td> <b> <?php echo $row['category_name']; ?> </b></td>
<td> <b> <?php echo $row['sub_category_name']; ?> </b></td>
<td> <b> <?php echo $row['product_name']; ?> </b></td>
<td> <img src="<?php echo $row['product_image']; ?>" width="50" height="50" /> </b></td>
<td> <b> <?php echo $row['product_price']; ?> </b></td>
<td> <b> <?php echo $row['product_disc']; ?> </b></td>
<td> <b> <?php echo $row['product_descr']; ?> </b></td>
<td>
<a href="product_edit.php?id=<?php echo $row['product_name']; ?>" ><img src="Pictures/cross.png" width="20" height="20"/></a>
</td>
<td>
<a href="product_delete.php?id=<?php echo $row['product_name']; ?>" ><img src="Pictures/cross.png" width="20" height="20"/></a>
</td>
</tr>
<?php 
} 
?>

</table>
</center>
</body>
</html>