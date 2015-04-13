<?php

include("connect.php");
/*if (mysql_query("CREATE DATABASE a0209115716",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Database is exsit or Error creating database: " . mysql_error();
  }*/
mysql_select_db("a0209115716", $con);
$sql = "CREATE TABLE threeline 
(
ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),
First text(50),
Second text(50),
Third text(50),
Name text(20)
)default charset=utf8";
mysql_query($sql,$con);

mysql_close($con);
?>