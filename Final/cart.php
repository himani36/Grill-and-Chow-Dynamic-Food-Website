<?php
session_start();
	
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
		
	}
	else{
		 if($_SESSION['usr_nm1']=="guest")
		 {
			 header("location: login.php");
		 }
		 else{
			 $pro_id= $_GET['pro'];
	         echo $pro_id;
	 
			include("connection.php");
			$sql1="select * from product_info where product_name='$pro_id'";
            $data= mysqli_query($conn, $sql1);
			$row= mysqli_fetch_array($data);
			
			$cart_img= $row['product_image'];
			$cart_name= $row['product_name'];
			$cart_price= $row['product_price'];
			$cart_discount= $row['product_disc'];
			$amt_pr= $cart_price -( ($cart_price * $cart_discount)/100);
			
			$sql3="select * from cart where product_name ='".$cart_name."'";
			echo $sql3;
			$result3 = mysqli_query($conn, $sql3);
			
			
			if(mysqli_num_rows($result3) >=1)
			{
				$sql ="update cart set cart_quantity= cart_quantity +1 where product_name='". $cart_name."'";
			}
			else
			{
			
            $sql ="insert into cart(reg_no, product_name, product_image, cart_price, cart_disc, cart_quantity, net_amount)
					  values (".$_SESSION['reg_no'].",'$cart_name','$cart_img',$cart_price,$cart_discount,1,$amt_pr)";
					}

            if (mysqli_query($conn, $sql))
			{
				header("location: product.php");
			}
			else{
				echo "error --".$sql;;
			}
			
			
		 }
	}
?>