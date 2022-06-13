	 <div><?php include('header.php');
	 	?>
	    </div>
	    <div>
	    	<?php include('bar.php');
	 	?>
	 </div>	
		
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
.menu{
height:6000px;
}
.menu:after{ content:"";display: block; clear;both; }

.leftbar h1{
font: italic bold 25px Georgia, serif;
text-align: center;
color: white ;
background-color: #ed4406;
margin-top: 0px;
padding: 5px;
}

.leftbar{
	float: left;
	position: sticky;
	top:0;
	margin-left: -8px;
	width: 20%;
	background-image: linear-gradient(to bottom, white, #fae6e8);
	background-repeat: no-repeat;
	border: 8px double #ed4406;
}
.rightbar{
	float: right;
	width: 80%;
	padding:5px;
	height:800px;
}

.leftbar ul{
}
.leftbar li{
list-style-type: none;
font: italic bold 18px Georgia, serif;
padding: 4px;
text-align: auto;
margin-left: 2px;
}
.leftbar li a {
text-decoration: none;
color: #ed4406;
}
.leftbar li a:hover{
color: coral;
}
.menu{ 
width:99%;
margin:auto;
}
.menu:after{ content:" "; display:block; clear:both; }

.catname{
	font: italic bold 40px Georgia, serif;
	text-align: center;
}
.catnam{
	font: italic bold 40px Georgia, serif;
	text-align: left;
}
	

.dishe{
	float: left;
	background-color: #fef6f4;
	margin: 25px;
	width: 275px;
	height: 450px;
	border-radius: 30px 0px;
    box-shadow: 8px 8px 8px 0 rgba(237, 68, 6, 0.15) ;
    padding: 5px;
}
.recipe img{
	width: 260px;
	height: 200px;
	border-radius:50px 0px;
	padding: 10px;
}
.recipe img:hover{
	width: 265px;
	height: 195px;
}
    	
.recipe h3{
	margin-top: 0;
	font: italic bold 25px Georgia, serif;
 	color:#ed4406;
 	text-align: center;
}
.recipe h2{
	margin-top: 0;
	font: italic bold 18px Georgia, serif;
 	text-align: center;
 	margin-top: -5px;
 	margin-bottom: 15px;
}
.recipe p{
	text-align: center;
	font: italic  18px Georgia, serif;
	margin-top: -10px;
}
.recipe .button{
padding:10px 20px;
color:white;
background-color:#ed4406;
border-radius:60px;
border:none;
font-size: 18px;
margin: 70px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
text-decoration:none;
}
.recipe .button:hover{
background-color:coral;
color:#fef6f4;
padding:10px 18px;
}
.gal_head{
	display:block; width:80%; margin-left:80px;
	text-align:center;
	color:red;
	font: italic bold 45px Georgia, serif;
}

@media screen and (max-width:800px){
	.leftbar li a{
		padding: 0%;
		font-size: 15px;
	}
	.leftbar{
		width: 40%;
		position: sticky;
		margin-bottom: 100%;
	}
	.rightbar{
		width: 60%;
	}
	.dishe{
	margin: 10% 2%;
    padding: 5px;
}

}
</style>
</head>
<body>

<div class="menu">
	<div class="leftbar">
			<h1>Our Menu</h1>
			<ul>
				<?php
					include("connection.php");
					$sql1="select * from sub_category_info order by category_name";
					
					$data=mysqli_query($conn,$sql1);
					$str1="";
					while($row=mysqli_fetch_array($data))
					{
						if($str1=="")
						{
				?>
				<li><a href="#" style="color: black;  text-algn: center;  "><?php echo $row['category_name']; ?><br></a></li>
				<li class="leftt"><a href="menu.php?ch=1&ct1=<?php echo $row['category_name']; ?>&ct2=<?php echo $row['sub_category_name'];?>" style="list-style-type: square;"><?php echo $row['sub_category_name']; ?></a></li>
			

				<?php 
							
							$str1 = $row['category_name'];

						}
						else
						{
							if($row['category_name']== $str1)
							{
				?>
				<li><a href="menu.php?ch=1&ct1=<?php echo $row['category_name']; ?>&ct2=<?php echo $row['sub_category_name'];?>"><?php echo $row['sub_category_name']; ?></a></li>
	
				<?php
							}
							else
							{
				?>
				<li><a href="#" style="color:black;  "><?php echo $row['category_name']; ?></a></li>
				<li class="leftt"><a href="menu.php?ch=1&ct1=<?php echo $row['category_name']; ?>&ct2=<?php echo $row['sub_category_name'];?>"><?php echo $row['sub_category_name']; ?><br></a></li>
					
				<?php
								$str1= $row['category_name'];
		
							}
						}
					}

				?>
			</ul>
		</div>
			<div class="rightbar">
				<?php
					if(isset($_GET['ch'])=='1')
					{
						echo "<span class='gal_head'>".$_GET['ct1']."</span>";
						include_once("gallery.php");
					}
					else
					{
							include_once("gallery.php");
					}
				?>
</div>
</div>

	    <div>
	    	<?php include('footer.php');
	 	?>
	 </div>
</body>
</html>

