<?php
include("connect.php");

mysql_select_db("a0209115716", $con);

$sql="INSERT INTO threeline (First, Second, Third,Name)
VALUES
('$_POST[First]','$_POST[Second]','$_POST[Third]','$_POST[Name]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
$result = mysql_query("SELECT * FROM threeline WHERE Name='$_POST[Name]'"); 
$row = mysql_fetch_array($result);
  

  //echo "<tr>" . $row['ID'] . "</tr>";

//echo "1 record added";
mysql_close($con);
$add = "show.php?ID=" . $row['ID'] ;   
	header("Location:" . $add); 
	
?>