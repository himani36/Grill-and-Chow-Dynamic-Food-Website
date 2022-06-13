
<?php

	include("connection.php");
$cat_nm= $_GET['cat1'];
$sbcat_nm= $_GET['cat2'];

echo "inner part cat name= $cat_nm and sub cat name = $sbcat_nm";




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="sub_category_update.php"  method="post">

<input type="hidden" name="tsbcat" value="<?php echo $sbcat_nm; ?>" >

<table border="1">
<tr><td colspan="2"> <h1>Product's Category (Alter)</h1></td></tr>
<tr><td> Category</td>
<td>
<input type="text"  name="ct_nm" value="<?php echo $cat_nm; ?>" readonly="readonly" />  </td></tr>


<tr><td> Subcategory</td>
<td>
<input type="text"  name="sbct_nm" value="<?php echo $sbcat_nm; ?>" />  
</td></tr>

<tr><td colspan="2">
<input name="submit" type="submit" value="Update">
</td></tr>
 </table>
 </form>
 
</body>
</html>

 