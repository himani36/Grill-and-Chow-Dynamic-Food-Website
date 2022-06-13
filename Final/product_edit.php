
<!DOCTYPE html>
<html>
<head>
</head>

<body>
    <h1>Product Edit</h1>
<?php
include("connection.php");
$product= $_GET['id'];
$data=mysqli_query($conn,"select * from  product_info  where product_name='$product'");
while($row=mysqli_fetch_array($data))
{
?>
<form action="product_update.php"  method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td> Category</td>
        <td>
            <input type="text"  name="cat_nm" value="<?php echo $row['category_name']; ?>" />
        </td>
    </tr>
    <tr>
        <td> Sub Category</td>
        <td>
            <input type="text" name="sub_nm" value="<?php echo $row['sub_category_name']; ?>" size="20" />
        </td>
    </tr>
    <tr>
        <td> Product Name</td>
        <td>
            <input type="text" name="pnm" value="<?php echo $row['product_name']; ?>" size="40"  />
        </td>
    </tr>

    <tr>
        <td> Picture</td>
        <td><img src="<?php echo $row['product_image']; ?>" width="50" height="50" />
             <input type="file" value=""  name="image" placeholder="Image" />		</td>
        </td>
    </tr>

    <tr>
        <td> Price</td>
        <td>
            <input type="text" value="<?php echo $row['product_price']; ?> " size="20" name="price" />
        </td>
    </tr>
    <tr>
        <td> Discount</td>
        <td>
            <input type="text" value="<?php echo $row['product_disc']; ?>" size="20" name="dis" />
        </td>
    </tr>
    <tr>
        <td> Description</td>
        <td><input type="text" value="<?php echo $row['product_descr']; ?>" size="80" name="desc" />
        </td>
    </tr>

    <tr>
        <td>
        <input name="submit" type="submit" value="Update">
        </td>
    </tr>

 </table>
 </form>
 <?php
 }
 ?>
</body>
</html>

 