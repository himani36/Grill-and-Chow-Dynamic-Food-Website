<!Doctype html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	width: 100%;
	margin: 0px;
}
.delicious img{
	width: 100%;
	height: 600px;
}
.delicious{
margin-top:0px;
}
.inst{
	position: absolute;
	top:450px;
	left: 10%;
	font-size: 30px;
	margin: 0px 190px;
}
.del{
	text-align: center;
	position: absolute;
	top: 230px;
	left: 150px;
	font: italic bold 25px Georgia, serif;
 	font-size: 62px;
}

 .delicious .button{
 	position: absolute;
	top: 520px;
	left: 380px;
    	float: right;
	background-color:#ed4406;
	border: none;
	font-size: 30px;
	font-weight:bold;
	color:white;
	border-radius:30px;
	padding:10px 30px;
	margin-top: 65px;
	margin-right: 30px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  	text-decoration:none;
}
.delicious .button:hover{
background-color:#fef6f4;
color:#ed4406;
border: 1px solid #ed4406;
}
@media screen and (max-width:1050px)
{
.del{
font-size:50px;
}
.inst{
position:absolute;
left:43px;
font-size:22px;
}
.delicious .button{
position:absolute;
font-size: 20px;
padding: 10px;
left:280px;
}
.delicious img{
height:450px;
}
}
@media screen and (max-width:880px)
{
.delicious img{
height:500px;
}
.delicious .button{
position:absolute;
font-size: 18px;
padding: 10px;
left:130px;
margin-top:100px;
}
}
</style>
<body>
	<div class="delicious">
		
		<!--<p class="del">Delicious Food <br> For Everyone</p> 
		<p class="inst"> Instant food, for instant hunger<br> Food that awaits you....</p>-->
		<a href="menu.php" class="button">Explore Menu</a>	
		<img src="Pictures/Delicious.gif">
		</div>
	</body>
</head>
</html>