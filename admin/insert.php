<?php

include("auth.php"); 
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$job = $_REQUEST['job'];
$submittedby = $_SESSION["username"];
$ins_query="insert into new_record (`trn_date`,`position`,`location` , `job`,`submittedby`) values ('$trn_date','$name','$age','$job','$submittedby')";
mysqli_query($con,$ins_query) or die(mysqli_error($con));
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter position" required /></p>
<p><input type="text" name="age" placeholder="Enter Location" required /></p>
<p><input type="text" name="job" placeholder="Enter Job Description" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>