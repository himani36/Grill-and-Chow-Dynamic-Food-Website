<?php

$name= $_POST['uname'];
$email= $_POST['email'];
$feedback= $_POST['feedback'];

include("connection.php");


$sql = "INSERT INTO feedback (name,email,feedback)
VALUES ('$name','$email','$feedback')";

if (mysqli_query($conn, $sql)) {

  header("Location:feedbackpage.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>