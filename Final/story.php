<?php 
include("connection.php");
?>
<!Doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.col-5 img{
	width: 520px;
	height: 430px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	border-radius: 50px;
	margin-top:150px;
	margin-left:30px;
}
.about::after {
  content: "";
  clear: both;
  display: table;
}
.heritage::after {
  content: "";
  clear: both;
  display: table;
}
.story{
	margin: 50px;
}
.story h1{
	font: italic bold 40px Georgia, serif;
	color: #ed4406 ;
	text-align: center;
}
.story h4{
	font-size: 20px;
}
.story p{
	text-align:justify;
	font-size: 20px;
}
.heritage{
	background-color: #fae6e8;
	
}
.heritage h1{
	font: italic bold 40px Georgia, serif;
	color: #ed4406 ;
	padding-left: 100px;
}
.heritage .para{
	font-size: 22px;

/*	padding-left: 100px;
	padding-right: 100px;
	padding-bottom: 100px;
*/
	text-align:justify;
}
.heritage p{
	text-align:justify;
	font-size: 22px;
	padding-left: 100px;
	padding-right: 100px;
	padding-bottom: 100px;
}

.heritage h4{
	font-size: 20px;
	padding-left: 100px;

}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%; float: left; }
.col-4 {width: 33.33%;float: left;}
.col-5 {width: 41.66%;float: left;}
.col-6 {width: 50%;float: left;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
  padding: 20px;
}

@media screen and (max-width:1120px)
{
.col-5 img{
float:left;
margin-left:50px;
}
.story{
float:left;
}
}

@media screen and (max-width:800px)
{
.col-5 img{
width:100%;
margin: 5% 1%;
}
.story{
	margin: 0%;
}
.heritage{
	padding: 0%;
}
}
.aboutus img{
	width: 100%;
	height: 500px;
}

</style>
<body>
<div class="about">
	<div class="aboutus">
		<img src="Pictures/Aboutus.gif">
	</div>
	<div class="col-5">
	<img src="Pictures/story.jpg">
	</div>
	<div class="col-6 story">
	<h1 >Our story</h1>
	<h4>The story of Grill and Chow, a creative Indian fast food shop Steeped in tradition, Grill & Chow is one of the Ludhiana’s oldest and finest shops. It is considered a benchmark for the quality of its fresh food, its classic dishes and its creative packaging.</h4>
	<p>  <?php 
$data=mysqli_query($conn,"select * from  aboutus  where id=1");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}
?><!--The story of Grill and Chow is a tale of harmony between tradition and creativity. Picture an elegant 21st century store in the heart of Ludhiana. Here, in 2009, The Vani Foods-run shop first opened its doors and through hard work and dedication, it earned an increasingly widespread reputation for its handmade confections. Cut to the early 2012, the owner, Mrs. Vani Chhabra began catering its wonderful recipes for famous wedding resorts and other events all over the Punjab State. Since those early days Grill and Chow has maintained an authentic atmosphere and has also remained faithful to its founding traditions of finest ingredients, highest craftsmanship and attention to detail.</p>
	<h4>Customers enticed inside by the imaginative window displays find themselves in a wonderland of temptations, where distinctive gift boxes decorated with brightly coloured flowers and ribbons enclose exquisite creations to delight the palate.</h4>-->
<!--
  <?php 
$data=mysqli_query($conn,"select * from  aboutus  where id=1");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}
?>
-->
</div>

</div>
<div class="col-12 heritage">
	<h1>Our Heritage</h1>
	 <h4>Picture an elegant 21st century store in the heart of Ludhiana.</h4>
	<p><?php 
$data=mysqli_query($conn,"select * from  aboutus  where id=2");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}?>
<!--Almost 11 years after opening up of the authentic fast food shop in Model Town, Grill and Chow still operates from the same address, with an unchanged passion for perfection. Whether you are stopping by on the way home from work or visiting from the other side of the world, Grill and Chow is the place to go to enjoy a unique kind of magic that melts in your mouth. To appreciate the flavor born from nearly 12 years of expertise. To sip that heavenly espresso, choose that breath taking birthday cake or surprise someone with a sublime selection of cookies. And now the same magic can also be experienced in new surroundings. Grill and Chow has recently opened up a new store at Pakhowal road, opposite house fed flats. Respecting the spirit of the original landmark site, Grill and Chow new venture reinterpret its atmosphere and ageless allure.-->
	</p>
	<!--<div class="para">
	 <?php 
$data=mysqli_query($conn,"select * from  aboutus  where id=2");
while($row=mysqli_fetch_array($data))
{
 echo $row['descr']; 
}
?>-->
</div>
</div>
<div class="video">
	<center>
	<video width="100%" height="550" controls>
  <source src="Pictures/aboutvideo.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</video>

</body>
</head>