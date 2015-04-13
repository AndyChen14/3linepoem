<?php
include("connect.php");

mysql_select_db("a0209115716", $con);

$sql = "DELETE FROM threeline WHERE ID='$_POST[ID]'";

if (!mysql_query($sql,$con))
  {
  die('Error: delete failed' . mysql_error());
  }
else
	{ 
	mysql_close($con);
	header("Location:allshow.php"); 
	}

$sql1 = "DELETE FROM threeline WHERE First IS NULL ";

if (!mysql_query($sql1,$con))
  {
  die('Error: delete failed' . mysql_error());
  }
else
	{ 
	mysql_close($con);
	header("Location:allshow.php"); 
	}
?>