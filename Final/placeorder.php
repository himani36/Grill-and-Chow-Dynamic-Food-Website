<?php
 session_start();
 error_reporting(0);
 
 date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
$currentDate= date('d-m-Y');
echo $currentTime." and ".$currentDate;
 
 
	if(!isset($_SESSION['usr_nm1']))
	{
		$_SESSION['usr_nm1']="guest";
		
	}	
	//$_SESSION['reg_no']= '9';
  include("connection.php");
 $invoice=0;
 $data=mysqli_query($conn,"select * from  invoice_set order by invoice_no");
 while($row=mysqli_fetch_array($data))
 {
	
	 $invoice= $row['invoice_no'];
	  // echo $invoice;
	 $invoice++;
	
 }
																																																																																			 echo $_SESSION['usr_nm1'];
																																																																																			 echo $_SESSION['reg_no'];
 $_SESSION['inv_no']= $invoice;
 
 //echo $invoice;
 
 /*$reg= "select * from register where name='$_SESSION[usr_nm1]'";
 echo $reg;
 $data=mysqli_query($conn,$reg);
 $row1=mysqli_fetch_array($data)
 $reg_no= $row['reg_no'];
	
 echo "Regno =".$reg_no;
 */
 $name= $_POST['username'];
 $addline1= $_POST['line1'];
 $addline2= $_POST['line2'];
 $city= $_POST['city'];
 $state= $_POST['state'];
 $pincode= $_POST['pin'];
 $phone= $_POST['phone'];
 $mop= $_POST['paymentmode'];
 $cardno= $_POST['card'];
 $cardexpiry= $_POST['exp'];
 $cardcvv= $_POST['cvv'];
 $quantity=0;
 $amount=0;
 $status= "Pending";
$sql ="insert into order_info(invoice_no,reg_no,customer_name, ad_line1, ad_line2,ad_city, ad_state,ad_pincode, phone, mop, card_no, card_expiry, card_cvv, total_quantity, net_amount, order_date, order_time, order_status, status_date, status_time )
					  values ($invoice,".$_SESSION['reg_no'].",'$name','$addline1','$addline2','$city','$state','$pincode','$phone','$mop','$cardno','$cardexpiry','$cardcvv',$quantity,$amount, '$currentDate','$currentTime','$status', '$currentDate','$currentTime')";
if (mysqli_query($conn, $sql))
			{
				header("location: bill.php");
				echo $sql;
				$tot_net_amt=0;
				$tot_qty=0;
			$data1=mysqli_query($conn,"select * from  cart where reg_no= '$_SESSION[reg_no]' ");
			while($row=mysqli_fetch_array($data1))
			{
				
			$productname= $row['product_name'];
			$quantity= $row['cart_quantity'];
			$image= $row['product_image'];
			$price= $row['cart_price'];
			$discount= $row['cart_disc'];
			$amount= $row['net_amount'];
			$sqll="insert into order_det(invoice_no, reg_no, product_name, product_image, cart_price, cart_disc, cart_quantity, net_amount)
			       values ($invoice,".$_SESSION['reg_no'].", '$productname','$image',$price,$discount,$quantity,$amount)"; 
			//$net_amt= ($price-($price*$discount)/100)* $quantity;
			$tot_net_amt=$tot_net_amt + $row['net_amount'];
		$tot_qty=$tot_qty + $row['cart_quantity'];
			if (mysqli_query($conn, $sqll))
			{
			echo "<br>";
			echo $sqll;
			}
			}				
		
			echo $tot_net_amt;
			echo "<br>";
			echo $tot_qty;
			$result= "update order_info set net_amount='$tot_net_amt' , total_quantity='$tot_qty'
			          where invoice_no='$invoice'";
			if (mysqli_query($conn, $result))
			{
			echo "<br>";
			echo $result;
			$del= "delete from cart where reg_no='$_SESSION[reg_no]'";
			if (mysqli_query($conn, $del))
			{
			echo "<br>";
			echo $del;
			}
			}
			$inv= $invoice + 1;
			$upd= "update invoice_set set invoice_no='$inv'";
			if (mysqli_query($conn, $upd))
			{
			echo "<br>";
			echo $upd;
			}
			}
			
			
			
			else{
				 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
 ?>