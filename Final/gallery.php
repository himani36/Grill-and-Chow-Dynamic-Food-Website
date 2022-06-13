
		<?php
include("connection.php");

if(!isset($_GET['ct1']))
{
		$sql1="select * from product_info  order by category_name";

}
else
{
	$sql1="select * from product_info where category_name='".$_GET['ct1']."' and sub_category_name='".$_GET['ct2']."' order by category_name";
}
//	$sql1="select * from product_info where category_name='".$_GET['ct1']."' and sub_category_name='".$_GET['ct2']."' order by category_name";

$data=mysqli_query($conn,$sql1);
//echo $sql1." total rows= ".mysqli_num_rows($data);
while($row=mysqli_fetch_array($data))
{
?>

<!--
<div class="catname">
<?php echo $row['category_name']; ?><br>
</div>
<div class="catnam">
<?php echo $row['sub_category_name']; ?>-->

		<div class="dishe">
			
			<div class="recipe">
				<img src="<?php echo $row['product_image']; ?>">
						<h3>
						<?php echo $row['product_name']; ?>
						</h3>
						<p><?php echo $row['product_descr']; ?></p>
						<h2>Price: Rs.
						<?php echo $row['product_price']; ?><br>
						<?php if($row['product_disc'] != 0){ echo $row['product_disc']."% OFF" ; } ?>
						</h2>
						<a href="cart.php?pro=<?php echo $row['product_name']; ?>" class="button">Order Now</a>	
					</div>
				</div>

<?php
}
?>
