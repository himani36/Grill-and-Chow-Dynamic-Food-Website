<!Doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	width: 100%;
	margin: 0px;
}
.cont img{
margin:0px;
	width: 100%;
	height: 550px;
}
.veg img{
float:left;
margin-left:100px;
height:400px;
width:40%;
margin-top:30px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.7);
border-radius:60px;
}
.det{
float:right;
width: 40%;
margin-right:50px;
margin-top:30px;
font-size:25px;
}
.contact{
margin-bottom:50px;
}
.contact::after {
  content: "";
  clear: both;
  display: table;
}
@media screen and (max-width:1120px)
{
.det{
margin: 35px;
}
.veg img{
width:80%;
}
}
@media screen and (max-width:800px)
{
.veg img{
	margin: 35px;
width:80%;
}
.cont img{
height:500px;
}
.det{
	margin: 35px;
width:80%;
}
}

</style>
<body>
<div class="contact">
<div class="cont">
<img src="Pictures/Contactus.gif">
</div>

<div class="veg">
<img src="Pictures/veg sandwich.jfif">
</div>
<div class="det">
<b>Location 1:</b><br> 

 <?php 
 include('connection.php');
$data=mysqli_query($conn,"select * from  contactus  where contactid=1");
while($row=mysqli_fetch_array($data))
{
 echo $row['contactdescr']; 
}
?>
<!--
25, Ishmeet Singh Rd, Shastri Nagar, Model Town,<br>
Ludhiana, Punjab 141001, India--><br><br>

<b>Location 2:</b><br>
<?php
include('connection.php');
 $data=mysqli_query($conn,"Select * from contactus where contactid=2");
 while($row=mysqli_fetch_array($data))
 {
 	echo $row['contactdescr'];
 }
?>
<!--Pakhowal Rd, Karnail Singh Nagar Phase-II,<br>
Karnail Singh Nagar, Ludhiana, Punjab 141013,<br>
India--><br><br>

<b>Phone : </b>
<?php
include('connection.php');
 $data=mysqli_query($conn,"Select * from contactus where contactid=3");
 while($row=mysqli_fetch_array($data))
 {
 	echo $row['contactdescr'];
 }
?><!--+91-81461-20667, 98149-20667--><br>
<b>Email :</b>
<?php
include('connection.php');
 $data=mysqli_query($conn,"Select * from contactus where contactid=4");
 while($row=mysqli_fetch_array($data))
 {
 	echo $row['contactdescr'];
 }
?>
<!-- info@bakefresh.in--><br><br>
<b>Opening Hours :</b><br>
<?php
include('connection.php');
 $data=mysqli_query($conn,"Select * from contactus where contactid=5");
 while($row=mysqli_fetch_array($data))
 {
 	echo $row['contactdescr'];
 }
?>
<!--
Mon-Sun: Fri.: 9 am - 11 pm (Model Town)<br>
Mon-Sun: Fri.: 9 am - 10:30 pm (pakhowal rd)-->

</div>
</div>
</body>
</head>
</html>