<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{ box-sizing: border-box;}
body{
  margin: 0px;
  background-color: white;
}
.feedback{
  background-image: linear-gradient(to bottom right,#ed4406 , #fae6e8);
  background-repeat: no-repeat;
  background-size: 100% 900px;
  width: 40%;
  margin-top: 5%;
  margin-left: 30%;
  margin-bottom: 10%;
  padding: 10px 25px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.3);
}
.feedback h2{
margin-top: 0px;
  color: white;
  font: italic bold 40px Georgia, serif;
  text-align: center;
  margin-bottom: 0px;
    margin-top: 3px;
}
.feedback input{
  width: 65%;
  height: 30px;
  border: 2px solid dimgray;
  margin: 5px 20px;
  border-radius:20px;
  padding-left:10px;
}
.feedback textarea{
  width: 65%;
  height: 30px;
  border: 2px solid dimgray;
  margin: 5px 20px;
   border-radius:20px;
   padding-left:10px;
}

.feedback button{
  font: italic bold 20px Georgia, serif;
  background-color: white;
  color: #ed4406;
  font-size: 23px;
  font-weight:bold;
  border-radius:30px;
  padding:10px 30px;
  text-decoration:none;
  box-shadow: 0 8px 16px 0 rgba(237, 68, 6, 0.20) ;
}
.feedback button:hover{
  background-image: none;
  background-color: white;
  border: 2px solid #ed4406;
}
form{
  padding: 10px 10px;
  }
  @media screen and (max-width:950px)
{
   .feedback {
    width: 80%;
	margin:10%;

}
   .feedback input,.feedback textarea{
       width: 72%;
	   }
 }

</style>
</head>
<body>
<div class="feedback">
    <h2>Feedback</h2>
        <form action="feedbackform.php" method="post">
		<center>
        <input type="text" name="uname"  placeholder="Name" required><br><br>
        <input type="email" name="email"  placeholder="E-mail" required><br><br>
    <div class="col-75">
      <textarea id="feedback" name="feedback" placeholder="Your Feedback..." required style="height:200px"></textarea><br><br>
    </div>
		<center>
		<button > Submit</button>
        </center>
		</form>
  </div>
</body>
</html>