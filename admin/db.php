<?php
/*
Author: Mehdi Ghaderpour
Website: https://mehdicv.rf.gd/
*/
$con = mysqli_connect("localhost","root","mysql","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>