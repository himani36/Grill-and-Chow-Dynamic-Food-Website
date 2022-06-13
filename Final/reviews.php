
<!DOCTYPE html>
<html>
<head>
</head>
<style>
body{
margin:0px;
}
*{
box-sizing:border-box;
}
.reviews:after{ content:" "; display:block; clear:both; }
.reviews{
width:85%;
margin:auto;
}
.reviews h2{
font: italic bold 25px Georgia, serif;
text-align:center;
font-size:35px;
}


.rev{
width:45%;
height:200px;
float:left;
border:2px solid #ed4406;
box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15) ;
border-radius:30px 0px;
margin:20px 10px;
font-size:18px;
color:dimgray;
}


.reviews .words{
height:380px;
}

.reviews .says{
height:53px;
width:100%;
padding:30px;
}
.rev img{
height:70px;
width:70px;
margin-top:0px;
border-radius:100%;
float:left;
margin:40px 30px;
}

.reviews h5{
margin: 60px;
float:right;
color:#ed4406;
margin-right:150px;
}

.reviews .rev:hover{
box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.30) ;
}
@media screen and (max-width:1200px)
{
    .rev{
	    width:80%;
		margin-right:100px;
		}
		.reviews .says{
           font-size:16px;
         }
		 .reviews h5{
           margin: 50px;
          }
  }

@media screen and (max-width:600px)
{
    .rev{
	    width:100%;
		margin-right:-2px;
		}
		.reviews .says{
           font-size:16px;
         }
		 .reviews h5{
           margin: 60px;
            
          }
  }
</style>
<body>
<div class="reviews" >

    <div class="words">
        <h2>What customers say....</h2>
		  <div class="rev">
		    <div class="says">
				<q>A best place for cakes and pastries.. do visit for bakery  items..a place with a good ambience and make best cakes.</q>
			</div>
			<h5> Himani Sharma</h5>
			<img src="Pictures\review1.jpg">
		</div>
		
<div class="rev" style="float:right;"  >
		  <div class="says">
		<q>They sell some unique kind of desserts!! Highly recommended!! Really great experience.....</q>
         </div>
		<h5>Supriya Narang </h5>
		<img src="Pictures\review2.jpg">
		</div>
	</div>

</div>
</div>



</body>
</html>