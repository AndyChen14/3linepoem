<?php
/*
* File Name:insert.php
* Content:insert the poem to database
* Version:1.0.1
* Modifier: Andy Chen
*/
include("connect.php");

mysql_select_db("a0209115716", $con);

//judgement the data is blank or not
if (($_POST[First]!=0) and ($_POST[Second]!=0) and ($_POST[Third]!=0)){

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
} else {
	echo "<p style='text-align:center; width:100%' ><br>Dear,the data is blank, please submit again!<br> ";
	echo "<a href='index.php' text-align='center' width='100%'>返回</a> ";
}	
?>