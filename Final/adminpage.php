<?php
	error_reporting(0);
	session_start();
if(!isset($_SESSION['usr_nm1']))
{
	$_SESSION['usr_nm1']="guest";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
 ul{
list-style-type: none;
float: left;
}
 li{
display: inline;
font-size: 18px;
font-weight: bold;
}
li a {
text-decoration: none;
padding: 18px;
color: black;
background-color:pink;
}
 li a:hover{
color:white;
}
</style>
</head>
<body>

        	<h1 style=" text-align:center; font-size:40px; "> GRILL & CHOW </h1>
	        <h2 style=" text-align:center; "> Admin Page</h2>            
            <hr />
        
        <ul>
        <li><a href="adminpage.php?id=01">Aboutus</a></li>
		<li><a href="adminpage.php?id=05">Contactus</a></li>
        <li><a href="adminpage.php?id=03">Category</a></li>
        <li><a href="adminpage.php?id=04">Sub Category</a></li>       
        <li><a href="adminpage.php?id=06">Products</a></li>
		<li><a href="adminpage.php?id=10">Feedback_details</a></li>
        <li><a href="adminpage.php?id=07">Login_details</a></li>
        <li><a href="adminpage.php?id=08">Order_details</a></li>
        <li><a href="logoutpg.php">Login Out</a></li>   
        
        </ul>
        
        <?php
				
			if($_REQUEST['id']=='01')
			{
				 include_once("aboutinfo.php");
			}
			else if($_REQUEST['id']=='02')
			{
				include_once("abt_pic.php");
			
			}
			else if($_REQUEST['id']=='03')
			{
				include_once("category_info.php");
			
			}
			else if($_REQUEST['id']=='04')
			{
				include_once("sub_category_info.php");
			
			}
			else if($_REQUEST['id']=='05')
			{
				include_once("contactinfo.php");
			
			}

			else if($_REQUEST['id']=='06')
			{
				
				include_once("product_info.php");
			
			}
			else if($_REQUEST['id']=='16')
			{	
				include_once("sub_category_edit.php");
			
			}


			
			else if($_REQUEST['id']=='17')
			{
				
				include_once("cancelled.php");
			
			}
			else if($_REQUEST['id']=='27')
			{
				
				include_once("dispatched.php");
			
			}
			else if($_REQUEST['id']=='37')
			{
				
				include_once("delivered.php");
			
			}
			else if($_REQUEST['id']=='08')
			{
				
				include_once("orderdetails.php");
			
			}
			else if($_REQUEST['id']=='10')
			{
				
				include_once("feedbackadmin.php");
			
			}
			else if($_REQUEST['id']=='07')
			{
				
				include_once("loginadmin.php");
			
			}
						
		?>
        

        	        <h3 style="text-align:center;"> Developed By : HUM</h3>            
                    
            <hr />
    
</body>
</html>
 