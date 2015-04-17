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
if (($_POST[First]!=NULL) and ($_POST[Second]!=NULL) and ($_POST[Third]!=NULL)){

$sql="INSERT INTO threeline (Theme, First, Second, Third,Name,Email,Department)
VALUES
('$_POST[Theme]','$_POST[First]','$_POST[Second]','$_POST[Third]','$_POST[Name]','$_POST[Email]','$_POST[Department]')";

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