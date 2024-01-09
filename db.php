<?php
//connect to the db
$con = mysqli_connect("localhost","root","","abhishek_taak");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>