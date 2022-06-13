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
.static{
width:100%;
height:330px;
}
.static img{
height:300px;
width:25%;
float:left;
}
@media screen and (max-width:1300px)
{
    .static{
height:230px;
}
   .static img{
   height:200px;
    }
  }

@media screen and (max-width:600px)
{
.static{
height:180px;
}
  .static img{
       height:150px;
    }
}

</style>
<body>
 <div class="static">
  <img src="Pictures\static1.jpg">
  <img src="Pictures\static2.jpg">
  <img src="Pictures\static3.jpg">
  <img src="Pictures\static4.jpg">
  
 </div>
</body>
</html>