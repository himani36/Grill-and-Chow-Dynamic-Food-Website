<!Doctype html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{ box-sizing: border-box;}
body{
background-color:white;
margin:0px;
}

.dishes{ width:99%;
margin:auto;
padding:3%;
}
.dishes:after{ content:" "; display:block; clear:both; }
.our{
	font: italic bold 40px Georgia, serif;
	text-align: center;
}
.most{
	text-align: center;
	color: #ed4406;
}
.slide{
	float: left;
	margin: 30px;
	background-color: #fef6f4;
	width: 330px;
	height: 425px;
	border-radius: 30px 0px;
    box-shadow: 0 8px 8px 0 rgba(237, 68, 6, 0.15) ;
}
.content img{
	width: 320px;
	height: 230px;
	border-radius:50px 0px;
	padding: 25px;
}
.content img:hover{
	width: 315px;
	height: 225px;
}
    	
.content h3{
	margin-top: 0;
	font: italic bold 25px Georgia, serif;
 	font-size: 22px;
 	text-align: center;
}
.content p{
	text-align: center;
	font-size: 18px;
	margin-top: -10px;
}
.content .button{
padding:10px 20px;
color:white;
background-color:#ed4406;
border-radius:60px;
border:none;
font-size: 18px;
margin-left: 60px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
text-decoration:none;
}
.content .button:hover{
background-color:coral;
color:#fef6f4;
padding:10px 18px;
}
@media screen and (max-width:800px)
{
	.slide{
	float: left;
	margin: 30px 0px;

}
}
</style>
</head>
<body>

	<div class="dishes">
		<h2 class="most">Most Popular</h2>
		<h1 class="our">Our Exclusive Recipies</h1>
		<div class="slide">
			<div class="content">
				<img src="Pictures/pizza4.jpg">
						<h3>Veggie Paradise</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.425 | Order Now</a>	
			</div>
		</div>
		<div class="slide">
			<div class="content">
				<img src="Pictures/pizza2.jpg">
						<h3>Farm House Pizza</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.440 | Order Now</a>
			</div>
		</div>
		<div class="slide">
			<div class="content">
				<img src="Pictures/pasta1.jpg">
						<h3>Red Sauce Pasta</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.325 | Order Now</a>
					</div>
			</div>
		<div class="slide">
			<div class="content">
				<img src="Pictures/pasta2.jpg">
						<h3>White Sauce Pasta</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.335 | Order Now</a>
					</div>
			</div>
		<div class="slide">
			<div class="content">
				<img src="Pictures/manchurian3.jpg">
						<h3>Gravy Manchurian</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.320 | Order Now</a>
					</div>
			</div>
		<div class="slide">
			<div class="content">
				<img src="Pictures/mix veg roll.jpg">
						<h3>Mix Veg Roll</h3>
						<p>Deliciousness jumping into the mouth<br> Grab it now</p>
						<a href="product.php" class="button">Rs.295 | Order Now</a>
					</div>
			</div>

	</div>
</body>
</head>
</html>